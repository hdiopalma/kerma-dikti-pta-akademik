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
        $trail->push('Daftar Pengajuan Izin Kerjasama', route('admin.proposal'));
    });

    // (Admin) Home > Proposal > [proposal]
    Breadcrumbs::for('admin.proposal.show', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal');
        $judul = $proposal->judul;
        $char_limit = 50;
        if (strlen($judul) > $char_limit) {
            $judul = substr($judul, 0,$char_limit) . '(...)';
        }
        $id = encrypt($proposal->id);
        $trail->push($judul, route('admin.proposal.show', $id));
    });

    // (Admin) Home > Proposal > Bab 1
    Breadcrumbs::for('admin.proposal.viewBab1', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal.show', $proposal);
        $trail->push('BAB 1', route('admin.proposal.viewBab1', $proposal));
    });
    
    // (Admin) Home > Proposal > Bab 2
    Breadcrumbs::for('admin.proposal.viewBab2', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal.show', $proposal);
        $trail->push('BAB 2', route('admin.proposal.viewBab2', $proposal));
    });

    // (Admin) Home > Proposal > Bab 3
    Breadcrumbs::for('admin.proposal.viewBab3', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal.show', $proposal);
        $trail->push('BAB 3', route('admin.proposal.viewBab3', $proposal));
    });

    // (Admin) Home > Proposal > Bab 4
    Breadcrumbs::for('admin.proposal.viewBab4', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('admin.proposal.show', $proposal);
        $trail->push('BAB 4', route('admin.proposal.viewBab4', $proposal));
    });

    // (Verifikator)) Home > Proposal
    Breadcrumbs::for('verifikator.proposal', function (BreadcrumbTrail $trail) {
        $trail->parent('dashboard');
        $trail->push('Daftar Pengajuan Izin Kerjasama', route('verifikator.proposal'));
    });

    // (Verifikator) Home > Proposal > [proposal]
    Breadcrumbs::for('verifikator.proposal.show', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('verifikator.proposal');
        $judul = $proposal->judul;
        $char_limit = 50;
        if (strlen($judul) > $char_limit) {
            $judul = substr($judul, 0,$char_limit) . '(...)';
        }
        $id = encrypt($proposal->id);
        $trail->push($judul, route('verifikator.proposal.show', $id));
    });

    // (Verifikator) Home > Proposal > Bab 1
    Breadcrumbs::for('verifikator.proposal.viewBab1', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('verifikator.proposal.show', $proposal);
        $trail->push('BAB 1', route('verifikator.proposal.viewBab1', $proposal));
    });

    // (Verifikator) Home > Proposal > Bab 2
    Breadcrumbs::for('verifikator.proposal.viewBab2', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('verifikator.proposal.show', $proposal);
        $trail->push('BAB 2', route('verifikator.proposal.viewBab2', $proposal));
    });

    // (Verifikator) Home > Proposal > Bab 3
    Breadcrumbs::for('verifikator.proposal.viewBab3', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('verifikator.proposal.show', $proposal);
        $trail->push('BAB 3', route('verifikator.proposal.viewBab3', $proposal));
    });

    // (Verifikator) Home > Proposal > Bab 4
    Breadcrumbs::for('verifikator.proposal.viewBab4', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('verifikator.proposal.show', $proposal);
        $trail->push('BAB 4', route('verifikator.proposal.viewBab4', $proposal));
    });

    // (Reviewer)) Home > Proposal
    Breadcrumbs::for('reviewer.proposal', function (BreadcrumbTrail $trail) {
        $trail->parent('dashboard');
        $trail->push('Daftar Pengajuan Izin Kerjasama', route('reviewer.proposal'));
    });

    // (Reviewer) Home > Proposal > [proposal]
    Breadcrumbs::for('reviewer.proposal.show', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('reviewer.proposal');
        $judul = $proposal->judul;
        $char_limit = 50;
        if (strlen($judul) > $char_limit) {
            $judul = substr($judul, 0,$char_limit) . '(...)';
        }
        $id = encrypt($proposal->id);
        $trail->push($judul, route('reviewer.proposal.show', $id));
    });

    // (Reviewer) Home > Proposal > Bab 1
    Breadcrumbs::for('reviewer.proposal.viewBab1', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('reviewer.proposal.show', $proposal);
        $trail->push('BAB 1', route('reviewer.proposal.viewBab1', $proposal));
    });

    // (Reviewer) Home > Proposal > Bab 2
    Breadcrumbs::for('reviewer.proposal.viewBab2', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('reviewer.proposal.show', $proposal);
        $trail->push('BAB 2', route('reviewer.proposal.viewBab2', $proposal));
    });

    // (Reviewer) Home > Proposal > Bab 3
    Breadcrumbs::for('reviewer.proposal.viewBab3', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('reviewer.proposal.show', $proposal);
        $trail->push('BAB 3', route('reviewer.proposal.viewBab3', $proposal));
    });

    // (Reviewer) Home > Proposal > Bab 4
    Breadcrumbs::for('reviewer.proposal.viewBab4', function (BreadcrumbTrail $trail, $proposal) {
        $trail->parent('reviewer.proposal.show', $proposal);
        $trail->push('BAB 4', route('reviewer.proposal.viewBab4', $proposal));
    });
