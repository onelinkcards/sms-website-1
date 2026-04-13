# SMS College — Sant Manjit Singh College website

PHP + static assets. Deploy to **Vercel** using the [vercel-community/php](https://github.com/vercel-community/php) runtime (`api/router.php` routes `/` and root-level `*.php` pages).

## Deploy on Vercel

1. Push this folder to GitHub (see below).
2. [Vercel](https://vercel.com) → **Add New Project** → import `onelinkcards/sms-websites`.
3. **Root Directory**: leave as repo root (this project root contains `vercel.json`).
4. **Framework Preset**: Other (no framework build step).
5. Deploy.

### Routing

- `/` and `/index.php` → homepage  
- `/about.php`, `/contact.php`, etc. → same scripts as local PHP  
- `/assets/*` → static files (CSS, JS, images)  
- `config.php` / `base.php` are **not** routable (include-only)

### Production notes

- **Email**: `mail()` may not work on Vercel. Use **Resend** (see `config.php` — `SMS_ENQUIRY_RESEND_API_KEY`).
- **Sessions**: serverless is stateless; enquiry “flash” toasts may be unreliable. Consider showing success only via redirect query or email confirmation.
- **Local preview with Vercel**: install [Vercel CLI](https://vercel.com/docs/cli) and run `vercel dev` (PHP must be installed locally).

## Push to GitHub

```bash
cd "/path/to/sms-final-design"
git init
git branch -M main
git add .
git commit -m "Initial commit: SMS College site + Vercel PHP router"
git remote add origin https://github.com/onelinkcards/sms-websites.git
git push -u origin main
```

If the repo already exists with commits, use `git pull origin main --allow-unrelated-histories` (resolve conflicts) before pushing.

## Alternative: classic PHP hosting

For full `mail()`, sessions, and `.htaccess`, use any **PHP 8+** host (cPanel, Cloudways, Railway, Render + Dockerfile) and point the document root to this folder.
