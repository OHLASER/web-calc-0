top_builddir = ./build/

builddir = $(top_builddir)
web_site_dir = $(top_builddir)web-site/
web_site_js_bundle_dir = $(web_site_dir)js/

MKDIR = mkdir
MKDIR_P = $(MKDIR) -p

CP = cp


all: index-js-r index-css-r php-deploy-in-web-site-r

index-js-r:
	@$(MAKE) -C src index-js-r

index-css-r:
	@$(MAKE) -C src index-css-r

php-lint-r:
	@$(MAKE) -C src php-lint-r

php-deploy-in-web-site-r:
	@$(MAKE) -C src php-deploy-in-web-site-r



.PHONY: all
.PHONY: index-js-r
.PHONY: index-css-r
.PHONY: php-lint-r
.PHONY: php-deploy-in-web-site-r


# vi: se ts=4 sw=4:
