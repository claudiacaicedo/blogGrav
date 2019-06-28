---
title: Blog
body_classes: 'header-image fullwidth'
content:
    items:
        - '@self.children'
    limit: 5
    order:
        by: folder
        dir: asc
    pagination: true
    url_taxonomy_filters: true
feed:
    limit: 10
    description: 'Sample Blog Description'
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
pagination: true
---

