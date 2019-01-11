<?php

require "../vendor/autoload.php";

use Src\Invoice;
use Src\InvoiceLine;

$invoice1 = new Invoice([
    new InvoiceLine('Facere quibusdam fugiat nesciunt neque laudantium sapiente.', 10, 20),
    new InvoiceLine('Et qui cupiditate nihil.', 16, 20),
    new InvoiceLine('Blanditiis animi et sint eius.', 18, 20),
    new InvoiceLine('Ratione esse modi in corporis blanditiis ea placeat.', 9, 20)
]);
$invoice2 = new Invoice([
    new InvoiceLine('Porro explicabo vel quis quae totam officiis quae.', 5, 20),
    new InvoiceLine('Vitae vel neque expedita ad', 15, 20),
    new InvoiceLine(' Illo fuga sequi deleniti fugiat.', 7, 20)
]);

$invoiceList = [
    $invoice1,
    $invoice2
];

foreach ($invoiceList as $key => $invoice) {
    echo "Facture ".$key." :\n";
    echo $invoice->__toString();
}
