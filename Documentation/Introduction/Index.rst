.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

W4 Cacheautoclear clears the cache of related pages after saving records. It's configured out of the box for files managed via :guilabel:`Filelist` and the extensions :guilabel:`news` and :guilabel:`tt_address`, but any kind of record from other third party extension can be added via setup.

Once installed, when creating or modifying any file in the :guilabel:`Filelist` or a :guilabel:`news` or :guilabel:`tt_address` record (or any other record configured in the setup), the cache of the pages containing plugins of Uploads, news or addressess (or any other extension configured) are cleared, without the need for the editors to clear the FE cache.
