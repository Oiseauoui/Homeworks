<?php
abstract class BaseUser
{
    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_MODERATOR = 'ROLE_MODERATOR';

    abstract public function getRole();
}

class ModeratorUser extends BaseUser implements ModeratorInterface
{
    public function getRole()
    {
        return self::ROLE_MODERATOR;
    }

    public function getModeratorName()
    {
        return 'Moderator';
    }
}

class AdminUser extends BaseUser implements AdminInterface, ModeratorInterface
{
    public function getRole()
    {
        return self::ROLE_ADMIN;
    }

    public function getAdminName()
    {
        return 'Admin';
    }

    public function getModeratorName()
    {
        return 'Moderator';
    }
}

interface ModeratorInterface
{
    public function getModeratorName();
}

interface AdminInterface
{
    public function getAdminName();
}

$user = new AdminUser();

