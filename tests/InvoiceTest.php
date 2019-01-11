<?php
declare(strict_types=1);

namespace Src;
use PHPUnit\Framework\TestCase;

final class InvoiceTest extends TestCase
{
    public function testItSetVat(): void
    {
        $invoiceLine = new InvoiceLine('Test', 300, 20);
        $this->assertEquals(
            300 + 300 * 0.2,
            $invoiceLine->calculateTotal()
        );
    }
}
