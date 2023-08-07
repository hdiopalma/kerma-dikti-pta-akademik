<?php
    use Diglactic\Breadcrumbs\Breadcrumbs;
    use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

    // Home (Dashboard)
    Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
        $trail->push('Dashboard', route('dashboard'));
    });

    // (Admin) Home > Proposal
    Breadcrumbs::for('admin.proposal', function (BreadcrumbTrail $trail) {
        $trail->parent('dashboard');
        $trail->push('Proposal', route('admin.proposal'));
    });

    // (Admin) Home > Proposal > [proposal]
    Breadcrumbs::for('admin.proposal.show', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal');
        $judul = $proposal->judul;
        $char_limit = 50;
        if (strlen($judul) > $char_limit) {
            $judul = substr($judul, 0,$char_limit) . '(...)';
        }
        $trail->push($judul, route('admin.proposal.show', $proposal));
    });