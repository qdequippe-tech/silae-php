tools/php-cs-fixer/vendor/composer/installed.php: tools/php-cs-fixer/composer.lock
	composer install --working-dir=./tools/php-cs-fixer

tools/rector/vendor/composer/installed.php: tools/rector/composer.lock
	composer install --working-dir=./tools/rector

vendor/composer/installed.php: composer.lock
	composer install

vendor: vendor/composer/installed.php

tools-vendor: tools/php-cs-fixer/vendor/composer/installed.php tools/rector/vendor/composer/installed.php

cs_check: tools-vendor ## Check code style
	./tools/bin/php-cs-fixer check

cs: tools-vendor ## Fix code style
	./tools/bin/php-cs-fixer fix -q

rectify: tools-vendor ## Run Rector
	./tools/bin/rector --no-diffs

rector: tools-vendor ## Run Rector (dry run)
	./tools/bin/rector --dry-run

jane: vendor openapi/silae-paie-rest-api.json ## Generate the SDK
	./vendor/bin/jane-openapi generate --config-file=.jane-openapi.php

patch-spec: openapi/Silae_Paie_Rest_API_Partenaires_latest.json
	php openapi/add-headers.php

build: patch-spec jane rectify cs

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help
