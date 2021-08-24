
top_builddir = ../../build/
web_site_dir = $(top_builddir)web-site/
web_site_js_bundle_dir = $(web_site_dir)js/
top_srcdir = ../../


NPX = npx
ROLLUP = $(NPX) rollup
MKDIR = mkdir
MKDIR_P = mkdir -p

all: index-js

index-js: $(web_site_js_bundle_dir)index.js


$(web_site_js_bundle_dir)index.js : index.js
	@$(MKDIR_P) $(@D)
	@$(ROLLUP) $< --format iife --file $@

.PHONY: all
.PHONY: index-js

# vi: se ts=4 sw=4 noet:
