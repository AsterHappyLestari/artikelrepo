<?php

// use Diglactic\Breadcrumbs\Breadcrumbs;
// use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

//Dashboard
Breadcrumbs::for('dashboard.index',function($trail){
	$trail->push('Dashboard',route('dashboard.index'));
});

//JURNAL
//List Jurnal
Breadcrumbs::for('jurnal',function($trail){
	$trail->push('List Jurnal',route('jurnal.index'));
});

//List Jurnal > Detail
Breadcrumbs::for('jurnal.show/{id_jurnal}',function($trail){
    $trail->parent('jurnal');
	$trail->push('Detail', url('jurnal/show/{id_jurnal}'));
});

//Jurnal > Edit
Breadcrumbs::for('jurnal.edit/{id_jurnal}',function($trail){
    $trail->parent('jurnal');
	$trail->push('Edit', url('jurnal/edit/{id_jurnal}'));
});

//Jurnal > Create
Breadcrumbs::for('jurnal.create',function($trail){
    $trail->parent('jurnal');
	$trail->push('Tambah', url('jurnal/create'));
});

//MAHASISWA
//List Mahasiswa
Breadcrumbs::for('mahasiswa',function($trail){
	$trail->push('List Mahasiswa',route('mahasiswa.index'));
});

//Mahasiswa > Create
Breadcrumbs::for('mahasiswa.create',function($trail){
    $trail->parent('mahasiswa');
	$trail->push('Tambah', url('mahasiswa/create'));
});

//List Mahasiswa > Detail
Breadcrumbs::for('mahasiswa.show/{id_mhs}',function($trail){
    $trail->parent('mahasiswa');
	$trail->push('Detail', url('mahasiswa/show/{id_mhs}'));
});

//Mahasiswa > Edit
Breadcrumbs::for('mahasiswa.edit/{id_mhs}',function($trail){
    $trail->parent('mahasiswa');
	$trail->push('Edit', url('mahasiswa/edit/{id_mhs}'));
});

//DOSEN
//List Dosen
Breadcrumbs::for('dosen',function($trail){
	$trail->push('List Dosen',route('dosen.index'));
});

//Dosen > Create
Breadcrumbs::for('dosen.create',function($trail){
    $trail->parent('dosen');
	$trail->push('Tambah', url('dosen/create'));
});

//List Dosen > Detail
Breadcrumbs::for('dosen.show/{id_dosen}',function($trail){
    $trail->parent('dosen');
	$trail->push('Detail', url('dosen/show/{id_dosen}'));
});

//List Dosen > Edit
Breadcrumbs::for('dosen.edit/{id_dosen}',function($trail){
    $trail->parent('dosen');
	$trail->push('Edit', url('dosen/edit/{id_dosen}'));
});