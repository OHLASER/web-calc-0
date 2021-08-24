top_builddir = ../../../build/
builddir = $(top_builddir)src/php/lib/
web_site_dir = $(top_builddir)web-site/
top_srcdir = ../../../
web_site_dist_dir = $(web_site_dir)lib/

MKDIR = mkdir
MKDIR_P = mkdir -p
ECHO = echo
CP = cp

PHP = php


PHP_FILES = \
	root-resolver.php \
	calc.php 


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

$(web_site_dist_dir)root-resolver.php : root-resolver.php
	@$(MKDIR_P) $(@D)
	@$(CP) $< $@


$(web_site_dist_dir)calc.php : calc.php
	@$(MKDIR_P) $(@D)
	@$(CP) $< $@



root-resolver-php : $(web_site_dist_dir)root-resolver.php 

calc-php : $(web_site_dist_dir)calc.php 


php-deploy-in-web-site: php-lint root-resolver-php calc-php

php-deploy-in-web-site-r: php-deploy-in-web-site

.PHONY: root-resolver-php calc-php
.PHONY: php-deploy-in-web-site
.PHONY: php-deploy-in-web-site-r
.PHONY: php-lint
.PHONY: php-lint-r

# vi: se ts=4 sw=4 noet:
