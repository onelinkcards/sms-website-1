<?php
/**
 * Inline SVGs for Why section — Lucide-style outline, stroke 1.5, currentColor (Section 4).
 * @param string $name graduation|building|flask|award|book|users|home|trending
 */
function sms_why_icon_svg($name)
{
    $common = 'width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"';
    $s = '<svg ' . $common . ' stroke="currentColor" stroke-width="1.35" stroke-linecap="round" stroke-linejoin="round">';
    switch ($name) {
        case 'graduation':
            $s .= '<path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>';
            break;
        case 'building':
            $s .= '<path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12h12"/><path d="M6 16h12"/><path d="M9 6h.01"/><path d="M9 10h.01"/><path d="M9 14h.01"/><path d="M9 18h.01"/><path d="M15 6h.01"/><path d="M15 10h.01"/><path d="M15 14h.01"/><path d="M15 18h.01"/>';
            break;
        case 'flask':
            $s .= '<path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/><path d="M8.5 2h7"/><path d="M7 16h10"/>';
            break;
        case 'award':
            $s .= '<circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-8.11"/>';
            break;
        case 'book':
            $s .= '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>';
            break;
        case 'users':
            $s .= '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>';
            break;
        case 'home':
            $s .= '<path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>';
            break;
        case 'trending':
            $s .= '<polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>';
            break;
        default:
            $s .= '<circle cx="12" cy="12" r="10"/>';
    }
    $s .= '</svg>';
    return $s;
}
