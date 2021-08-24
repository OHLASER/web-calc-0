
top_builddir = ../../../build/
web_site_dir = $(top_builddir)web-site/
web_site_css_bundle_dir = $(web_site_dir)css/
top_srcdir = ../../../


NPX = npx
SASS = $(NPX) sass
MKDIR = mkdir
MKDIR_P = mkdir -p

all: index-js

index-css: $(web_site_css_bundle_dir)index.css

index-css-r: index-css

$(web_site_css_bundle_dir)index.css : index.scss
	@$(MKDIR_P) $(@D)
	@$(SASS) $< $@

.PHONY: all
.PHONY: index-css
.PHONY: index-css-r

# vi: se ts=4 sw=4 noet:
