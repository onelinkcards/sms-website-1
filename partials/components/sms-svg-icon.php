<?php
/**
 * Minimal stroke SVG icons — consistent weight, uses currentColor.
 * Usage: include once, then sms_svg_icon('book', 'sms-svg sms-svg--md');
 */
if (!function_exists('sms_svg_icon')) {
    function sms_svg_icon(string $name, string $class = 'sms-svg', string $aria = 'true'): void
    {
        $a = $aria === 'true' ? ' aria-hidden="true"' : ' role="img" aria-hidden="false"';
        $c = htmlspecialchars($class, ENT_QUOTES, 'UTF-8');
        switch ($name) {
            case 'book':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 7h8M8 11h6" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>';
                break;
            case 'document':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 2v6h6M8 13h8M8 17h8" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>';
                break;
            case 'pin':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="1.75"/></svg>';
                break;
            case 'chat':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            case 'arrow-right':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M5 12h14M13 5l7 7-7 7" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            case 'phone':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            case 'search':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.75"/><path d="m20 20-3-3" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>';
                break;
            case 'menu':
                echo '<svg class="' . $c . '" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"/></svg>';
                break;
            case 'facebook':
                echo '<svg class="' . $c . '" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3V2z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            case 'youtube':
                echo '<svg class="' . $c . '" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.75 15.02l5.75-3.27-5.75-3.27v6.54z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            case 'instagram':
                echo '<svg class="' . $c . '" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><rect x="2" y="2" width="20" height="20" rx="5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor"/></svg>';
                break;
            case 'whatsapp':
                echo '<svg class="' . $c . '" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><path d="M12 3a8 8 0 0 0-6.92 12l-.72 2.6 2.67-.7A8 8 0 1 0 12 3z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.2 9.3c.2.6.9 2.8 2.4 4.3s3.6 2.5 4.2 2.7M9 14.5c1.4 1.3 2.8 1.7 4.2 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>';
                break;
            case 'envelope':
                echo '<svg class="' . $c . '" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"' . $a . '><rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="m3 7 9 6 9-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                break;
            default:
                echo '';
        }
    }
}
