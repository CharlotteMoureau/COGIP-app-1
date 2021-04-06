<?php

declare(strict_types=1);

require_once('Manager.php');

class InvoiceManager extends Manager
{
    public function getInvoice()
    {
        
        $db = $this->connectDb();

        $req = $db->query('SELECT InvoiceNumber, InvoiceDate, Name, Type 
            FROM Invoices i
            INNER JOIN Companies c
            ON i.CompanyId = c.Id
            ORDER BY InvoiceDate DESC');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
<<<<<<< HEAD

    public function getDetails($Id)
    {
        $db = $this->connectDb();
    
            $req = $db->prepare('SELECT InvoiceNumber, Name, VATNumber, Type, FirstName, LastName, Email
                FROM ((Invoices i
                INNER JOIN Companies c
                ON i.CompanyId = c.Id)
                INNER JOIN People p
                ON i.ClientId = p.Id)
                WHERE InvoiceNumber = :Id');
    
            $req->execute(['Id'=>$Id]);
    
            $result = $req->fetch();
    
            return $result;
    }
=======
>>>>>>> origin/Charlotte
}