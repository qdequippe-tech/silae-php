# Contributing to Silae PHP SDK

Thank you for considering contributing to the Silae PHP SDK! This document provides guidelines and instructions for contributing to the project.

## Development Setup

1. **Fork the repository** on GitHub by clicking the "Fork" button

2. Clone your fork:
```bash
git clone https://github.com/YOUR-USERNAME/silae-php.git
cd silae-php
```

3. Add the upstream repository:
```bash
git remote add upstream https://github.com/qdequippe-tech/silae-php.git
```

4. Install dependencies:
```bash
composer install
```

5. Install development tools:
```bash
make tools-vendor
```

## Code Quality Standards

This project maintains high code quality standards using several automated tools.

### PHP CS Fixer

We use [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) to maintain consistent code style across the project. The configuration is located in `tools/php-cs-fixer/`.

**Check code style:**
```bash
make cs_check
```

**Fix code style automatically:**
```bash
make cs
```

Always run the code style fixer before committing your changes.

### Rector

We use [Rector](https://github.com/rectorphp/rector) for automated code refactoring, PHP version upgrades, and maintaining code quality. The configuration is in `rector.php`.

**Run Rector (dry run):**
```bash
make rector
```

**Apply Rector changes:**
```bash
make rectify
```

Rector is configured to process the `src/`, `generated/`, and `tests/` directories with PHP 8.3 standards.

## API Client Generation

This library uses [Jane](https://github.com/janephp/janephp) to automatically generate the API client from the OpenAPI specification.

### Generating the Client

The OpenAPI specification files are located in the `openapi/` directory. To regenerate the client after updating the specification:

1. Update the OpenAPI specification file if needed
2. Patch the specification:
```bash
make patch-spec
```

3. Generate the client:
```bash
make jane
```

Or run the full build process (recommended):
```bash
make build
```

The `make build` command will:
- Patch the OpenAPI specification
- Generate the API client using Jane
- Apply Rector refactoring
- Fix code style

**Important:** Generated files in the `generated/` directory should be committed to the repository.

## Development Workflow

1. **Fork the repository** and create your branch from `main`:
```bash
git checkout -b feature/my-new-feature
```

2. **Make your changes** in the `src/` directory (not in `generated/`)

3. **Run code quality checks:**
```bash
make rector      # Check Rector rules
make cs_check    # Check code style
```

4. **Fix any issues:**
```bash
make rectify     # Apply Rector fixes
make cs          # Fix code style
```

5. **Test your changes** (if tests are available)

6. **Commit your changes** with clear, descriptive commit messages:
```bash
git add .
git commit -m "Add feature: description of the feature"
```

7. **Push to your fork:**
```bash
git push origin feature/my-new-feature
```

8. **Submit a Pull Request** to the main repository

## Pull Request Guidelines

- **Keep PRs focused**: One feature or fix per pull request
- **Pass all checks**: Ensure PHP CS Fixer and Rector checks pass
- **Write clear descriptions**: Explain what your PR does and why
- **Update documentation**: If your changes affect the public API, update the README.md
- **Follow PSR standards**: Code should follow PSR-12 coding standards
- **Require PHP 8.1+**: Ensure compatibility with PHP 8.1 and above

## Makefile Commands

The project includes a Makefile with helpful commands:

- `make help` - Display all available commands
- `make cs` - Fix code style
- `make cs_check` - Check code style
- `make rector` - Run Rector (dry run)
- `make rectify` - Apply Rector fixes
- `make jane` - Generate the API client
- `make patch-spec` - Patch the OpenAPI specification
- `make build` - Full build (patch + generate + rector + cs)

## Project Structure

```
silae-php/
├── src/                    # Source code (edit here)
├── generated/              # Generated API client (auto-generated)
├── tests/                  # Tests
├── openapi/                # OpenAPI specifications
├── tools/php-cs-fixer/     # PHP CS Fixer configuration
├── rector.php              # Rector configuration
└── .jane-openapi.php       # Jane configuration
```

## Questions or Issues?

If you have questions or run into issues:

1. Check existing [GitHub Issues](https://github.com/qdequippe-tech/silae-php/issues)
2. Create a new issue with a clear description
3. Join the discussion in pull requests

## License

By contributing to this project, you agree that your contributions will be licensed under the MIT License.

---

Thank you for contributing! 🎉

