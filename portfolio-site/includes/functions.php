<?php
function getPortfolioProjects() {
    return [
        [
            'title' => 'Modern Business Website',
            'description' => 'A responsive corporate landing page built with PHP templating and modern CSS.',
            'tech' => 'HTML, CSS, PHP'
        ],
        [
            'title' => 'Creative Portfolio',
            'description' => 'A portfolio gallery with project cards, dynamic sections, and smooth navigation.',
            'tech' => 'HTML, CSS, PHP'
        ],
        [
            'title' => 'Contact Form Interface',
            'description' => 'A contact page with server-side form handling and validation.',
            'tech' => 'PHP, HTML, CSS'
        ],
    ];
}

function handleContactForm($data) {
    $name = trim($data['name'] ?? '');
    $email = trim($data['email'] ?? '');
    $messageText = trim($data['message'] ?? '');

    if ($name === '' || $email === '' || $messageText === '') {
        return ['message' => 'Please complete all fields before sending.'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['message' => 'Please enter a valid email address.'];
    }

    // Replace this with actual email delivery logic if needed.
    return ['message' => 'Thank you, your message has been received.'];
}
