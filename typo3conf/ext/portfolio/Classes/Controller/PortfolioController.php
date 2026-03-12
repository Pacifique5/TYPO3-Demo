<?php

declare(strict_types=1);

namespace Pacifique\Portfolio\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PortfolioController extends ActionController
{
    public function listAction(): ResponseInterface
    {
        $personalInfo = [
            'name' => 'Mugisha Pacifique',
            'email' => 'Pacifiquem58@gmail.com',
            'phone' => '+250 795 653 123',
            'github' => 'https://github.com/Pacifique5',
            'linkedin' => 'https://linkedin.com/in/mugisha-pacifique',
            'tagline' => '👋 Welcome to my portfolio',
            'title' => "Hi, I'm Mugisha Pacifique",
            'roles' => ['Full-Stack Developer', 'AI Enthusiast', 'Open-Source Contributor', 'Problem Solver'],
            'bio' => 'Passionate Full-Stack Developer specializing in Next.js, React, and AI.',
        ];

        $projects = [
            [
                'title' => 'Next Portfolio Website',
                'description' => 'A modern portfolio website built with Next.js and Tailwind CSS',
                'tags' => ['Next.js', 'React', 'Tailwind CSS'],
                'category' => 'Web',
                'featured' => true,
            ],
            [
                'title' => 'FARM PRO',
                'description' => 'A full-stack farm management system with inventory tracking',
                'tags' => ['Laravel', 'PHP', 'MySQL'],
                'category' => 'Web',
                'featured' => false,
            ],
            [
                'title' => 'CacheNet',
                'description' => 'Network caching solution for offline content access',
                'tags' => ['Next.js', 'React Native', 'Node.js'],
                'category' => 'Mobile',
                'featured' => true,
            ],
        ];

        $this->view->assignMultiple([
            'personalInfo' => $personalInfo,
            'projects' => $projects,
        ]);

        return $this->htmlResponse();
    }
}
