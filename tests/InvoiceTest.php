<?php
declare(strict_types=1);

namespace Src;
use PHPUnit\Framework\TestCase;

final class InvoiceTest extends TestCase
{
    public function testItSetVat(): void
    {
        $invoiceLine = new InvoiceLine('Test', 30, 20);
        $this->assertEquals(
            30 + 30 * 0.2,
            $invoiceLine->calculateTotal()
        );
    }
}
