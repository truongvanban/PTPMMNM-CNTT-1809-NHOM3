<?php
declare(strict_types=1);

function canComplete(array $session, int $requestedEventId, int $now, int $ttl): bool {
    if (!isset($session['draft']) || !is_array($session['draft'])) {
        return false;
    }
    $created = $session['draft']['created_at'] ?? null;
    $data    = $session['draft']['data'] ?? null;

    if (!is_int($created) || !is_array($data)) return false;
    if ($ttl <= 0) return false;
    if ($created > $now) return false;
    if ($now - $created >= $ttl) return false;
    if (!isset($data['event_id'])) return false;

    return (int)$data['event_id'] === $requestedEventId;
}
