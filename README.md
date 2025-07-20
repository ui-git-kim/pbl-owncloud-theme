# PBL ownCloud Theme

Custom ownCloud theme for The Photo Booth-less client galleries.

## Features
- Dark theme with purple branding
- Custom logos and colors
- Clean interface for photo delivery

## Installation
1. Upload to ownCloud `apps` directory
2. Enable: `sudo -u www-data ./occ app:enable pbl-owncloud-theme`
3. Add to `config/config.php`:
   ```php
   'integrity.ignore.missing.app.signature' => [
       'pbl-owncloud-theme',
   ],
   ```

---
**The Photo Booth-less** - Picture Perfect Fun