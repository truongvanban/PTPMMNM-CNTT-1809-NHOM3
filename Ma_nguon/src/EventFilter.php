<?php
declare(strict_types=1);

function filterEvents(array $events, string $query, string $category = '',
    bool $availableOnly = false): array
{
    $result = [];
    foreach ($events as $event) {
        // 1. Keyword trong title (rỗng → bỏ qua)
        if ($query !== '' && stripos($event['title'], $query) === false) {
            continue;
        }
        // 2. Category khớp chính xác (rỗng → bỏ qua)
        if ($category !== '' && ($event['category'] ?? '') !== $category) {
            continue;
        }
        // 3. Available: còn chỗ (registered < capacity)
        if ($availableOnly && ($event['registered'] ?? 0) >= ($event['capacity'] ?? 0)) {
            continue;
        }
        $result[] = $event;
    }
    return $result;
}
