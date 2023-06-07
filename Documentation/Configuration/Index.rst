.. include:: /Includes.rst.txt

.. _configuration:

=============
Configuration
=============

New records to be handled by this extension can be added in the setup. For instance, if we have installed the extension :guilabel:`faq`, we know that its records are stored in the table :guilabel:`tx_faq_domain_model_question`, and that in the table :guilabel:`tt_content` the fields :guilabel:`CType` and :guilabel:`list_type` of its plugins have these values:

* CType = list
* list_type = faq_faq

Adding this to the setup:

.. code-block:: typoscript

   plugin.tx_w4cacheautoclear {
      settings {
         records {
               6 {
                  table = tx_faq_domain_model_question
                  table_subtype = 200
                  where {
                     // CType="list" AND list_type="faq_faq"
                     1 {
                        field = CType
                        is = eq
                        to = list
                     }
                     2 {
                        field = list_type
                        is = eq
                        to = faq_faq
                     }
                  }
               }
         }
      }
   }

after modifying any faq record the extension will find the pages that contain a faq plugin and clear their caches.
