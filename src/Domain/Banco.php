<?php

namespace App\ByteBank\Domain;

class Banco
{
    public function __construct(
        public readonly string $owner,
        public readonly int $number,
        public readonly float $saldo,
    )  {
    }

    public function setSaldo(float $saldo): void
    {
        $this->saldo += $saldo;
    }

    public function __toString(): string
    {
        return "Usuário: $this->owner, Conta: $this->number, Saldo: $this->saldo";
    }
}
