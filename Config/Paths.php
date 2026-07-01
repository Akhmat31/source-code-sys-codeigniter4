<?php

namespace Config;

/**
 * Paths
 *
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 *
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project's root folder.
 *
 * NOTE: This class is required prior to Autoloader instantiation,
 *       and does not extend BaseConfig.
 */
class Paths
{
public string $systemDirectory = __DIR__ . '/../system';
// public string $systemDirectory = ROOTPATH . 'system'; // Hapus komentar ini jika instalasi manual/zip

public string $appDirectory      = '../app';
public string $writableDirectory = '../writable';
public string $testsDirectory    = '../tests';
public string $viewDirectory     = '../app/Views';
public string $envDirectory      = '../';
}
