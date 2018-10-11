<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends CI_Model {
    public function transactionEachMonth()
    {
        $this->db->select("transaction_id, date, (SELECT sum(thp.purchase_qty) as sum_qty FROM transactions as t JOIN transactions_has_products as thp ON t.transaction_id = thp.transactions_transaction_id JOIN products as p ON p.product_id = thp.products_product_id WHERE t.transaction_id = tt.transaction_id) AS count_purchase_qty");
        
        $this->db->from('transactions as tt');

        $this->db->join('transactions_has_products as thp', 'tt.transaction_id = thp.transactions_transaction_id');

        $this->db->join('products as p', 'p.product_id = thp.products_product_id');

        $this->db->group_by('transaction_id');

        return $this->db->get()->result();
    }

    public function transactionsTotalQty(){
        return $this->db->get('transactions_has_products')->result();
    }
}