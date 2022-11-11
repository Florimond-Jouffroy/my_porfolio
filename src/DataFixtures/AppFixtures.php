<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
  public function __construct(private UserPasswordHasherInterface $passwordHasher)
  {
  }
  public function load(ObjectManager $manager): void
  {
    // $product = new Product();
    // $manager->persist($product);

    $user = new User();
    $user
      ->setEmail('florimond.25@gmail.com')
      ->setPassword($this->passwordHasher->hashPassword($user, 'admin'));
    $manager->persist($user);

    $manager->flush();
  }
}
