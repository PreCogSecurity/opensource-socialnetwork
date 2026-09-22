<?php
use PHPUnit\Framework\TestCase;

class OssnUserTest extends TestCase {

    public function testPasswordValidation() {
        $user = new OssnUser();
        $user->password = '12345';
        $this->assertFalse($user->isPassword());

        $user->password = 'secret123';
        $this->assertTrue($user->isPassword());
    }

    public function testEmailValidation() {
        $user = new OssnUser();
        $user->email = 'invalid-email';
        $this->assertFalse($user->isEmail());

        $user->email = 'test@example.com';
        $this->assertTrue($user->isEmail());
    }

    public function testUsernameValidation() {
        $user = new OssnUser();
        $user->username = 'abc'; // too short (< 5)
        $this->assertFalse($user->isUsername());

        $user->username = 'user!name'; // invalid characters
        $this->assertFalse($user->isUsername());

        $user->username = 'validuser123';
        $this->assertTrue($user->isUsername());
    }

    public function testGenderTypes() {
        $user = new OssnUser();
        $genders = $user->genderTypes();
        $this->assertContains('male', $genders);
        $this->assertContains('female', $genders);
    }
}
