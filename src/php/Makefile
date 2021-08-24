top_builddir = ../../build/
builddir = ../../build/src/php/
web_site_dir = $(top_builddir)web-site/
top_srcdir = ../../
web_site_dist_dir = $(web_site_dir)

MKDIR = mkdir
MKDIR_P = mkdir -p
ECHO = echo
CP = cp

PHP = php


PHP_FILES = \
	functions.php \
	index.php


$(builddir)php-lint-stmp: $(PHP_FILES)
	@$(MKDIR_P) $(builddir) 
	@for file in $+ ; \
	do  { \
		$(PHP) -l $${file}; \
		if [[ $$? -ne 0 ]]; then \
			break; \
		fi; \
	} ; done
	@$(ECHO) `date` > $@

php-lint: $(builddir)php-lint-stmp

php-lint-r: php-lint
	@$(MAKE) -C lib php-lint-r
	@$(MAKE) -C rest php-lint-r


$(web_site_dist_dir)functions.php : functions.php
	@$(MKDIR_P) $(@D)
	@$(CP) $< $@

$(web_site_dist_dir)index.php : index.php
	@$(MKDIR_P) $(@D)
	@$(CP) $< $@


functions-php : $(web_site_dist_dir)functions.php 

index-php : $(web_site_dist_dir)index.php

php-deploy-in-web-site: php-lint functions-php index-php

php-deploy-in-web-site-r: php-deploy-in-web-site
	@$(MAKE) -C lib php-deploy-in-web-site-r
	@$(MAKE) -C rest php-deploy-in-web-site-r

.PHONY: functions-php  index-php
.PHONY: php-deploy-in-web-site
.PHONY: php-deploy-in-web-site-r
.PHONY: php-lint
.PHONY: php-lint-r

# vi: se ts=4 sw=4 noet:
