<?php

namespace parte_2\Test\Service;

use PHPUnit\Framework\TestCase;

class BadWordsValidatorTest extends TestCase
{

    /**
     * @test
     */
    public function hasBadWords()
    {
        // STUBS objeto falso semelhante aos objetos reais
        $badWordsRepository = $this->createMock(BadWordsRepository::class);
        $badWordsRepository->method('findAllAsArray')
            ->willReturn(['bobo', 'chule', 'besta']);

        $badWordsValidator = new BadWordsValidator($badWordsRepository);
        $hasBadWords = $badWordsValidator->hasBadWords('Seu restaurante e muito bobo');

        $this->assertEquals(false, $hasBadWords);
    }
}
