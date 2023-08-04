tools/php-cs-fixer/vendor/composer/installed.php: tools/php-cs-fixer/composer.lock
	composer install --working-dir=./tools/php-cs-fixer

vendor/composer/installed.php: composer.lock
	composer install

vendor: vendor/composer/installed.php

tools-vendor: tools/php-cs-fixer/vendor/composer/installed.php

cs: tools-vendor ## Fix code style
	./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix

rectify: vendor ## Run Rector
	./vendor/bin/rector

rector: vendor ## Run Rector (dry run)
	./vendor/bin/rector --dry-run

jane: vendor ## Generate the SDK
	./vendor/bin/jane-openapi generate --config-file=.jane-openapi.php

.PHONY: help

help: ## Display this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'

.DEFAULT_GOAL := help