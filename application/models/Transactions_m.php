<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transactions_m extends CI_Model
{

    public function transactionsGet()
    {
        $this->db->select('
            transactions.transaction_id,
            transactions.date as transaction_date,
            costumers.costumer_id,
            costumers.name
        ');
        $this->db->from('transactions');
        $this->db->join('costumers', 'transactions.costumers_costumer_id = costumers.costumer_id');
        $this->db->order_by('date', 'DESC');


        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function transactionsGetSearch($costumerWhere, $dateWhere)
    {
        $this->db->select('
            transactions.transaction_id,
            transactions.date as transaction_date,
            costumers.costumer_id,
            costumers.name
        ');
        $this->db->from('transactions');
        $this->db->join('costumers', 'transactions.costumers_costumer_id = costumers.costumer_id');
        if (!empty($costumerWhere) && !empty($dateWhere)) {
            $this->db->where(['date' => $dateWhere, 'costumers_costumer_id' => $costumerWhere]);
        } else {
            $this->db->where('costumers_costumer_id', $costumerWhere)
                ->or_where('date', $dateWhere);
        }
        $this->db->order_by('date', 'DESC');


        $query = $this->db->get();
        return $query;
    }

    public function transactionGet($where)
    {
        $this->db->select('
            transaction_id,
            date,
            costumers_costumer_id
        ');
        $this->db->from('transactions');
        $this->db->where('transaction_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function transactionCostumerGet($where)
    {
        $this->db->select('
            costumer_id,
            name,
            email,
            phone,
            status,
            address
        ');
        $this->db->from('costumers');
        $this->db->where('costumer_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function transactionProductGet($where)
    {
        $this->db->select('
            product_id,
            name,
            purchase_qty,
            price,
            status
        ');
        $this->db->from('transactions_has_products');
        $this->db->join('products', 'transactions_has_products.products_product_id = products.product_id');
        $this->db->where('transactions_transaction_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function transactionCreate()
    {

        $this->db->insert('transactions', [
            'date' => $this->input->post('transaction-date'),
            'costumers_costumer_id' => $this->input->post('costumer')
        ]);

        $transactionLastId = $this->db->insert_id();
        $products = $this->input->post('products[]');
        $qty = $this->input->post('qty[]');
        foreach ($products as $i => $product) {
            $query = $this->db->insert('transactions_has_products', [
                'transactions_transaction_id' => $transactionLastId,
                'products_product_id' => $product,
                'purchase_qty' => $qty[$i]
            ]);
        }

        for ($i = 0; $i < count($products); $i++) {
            $this->db->query('
                UPDATE products
                SET unit_in_stock = unit_in_stock - ' . $qty[$i] . '
                WHERE product_id = ' . $products[$i] . '
            ');
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function transactionDelete($where)
    {
        $this->db->delete('transactions_has_products', ['transactions_transaction_id' => $where]);
        $this->db->delete('transactions', ['transaction_id' => $where]);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function transactionsTotalSales()
    {
        $query = $this->db->query('
            SELECT * FROM Transactions
            JOIN transactions_has_products ON Transactions.transaction_id = transactions_has_products.transactions_transaction_id
            JOIN products ON products.product_id = transactions_has_products.products_product_id
        ');

        return $query;
    }

    public function transactionEachMonth($product_id)
    {
        $this->db->select("transaction_id, date, 
        (SELECT sum(thp.purchase_qty) as sum_qty FROM transactions as t JOIN transactions_has_products as thp ON t.transaction_id = thp.transactions_transaction_id JOIN products as p ON p.product_id = thp.products_product_id WHERE t.transaction_id = tt.transaction_id AND thp.products_product_id = $product_id) AS count_purchase_qty");

        $this->db->from('transactions as tt');

        $this->db->join('transactions_has_products as thp', 'tt.transaction_id = thp.transactions_transaction_id');

        $this->db->join('products as p', 'p.product_id = thp.products_product_id');

        $this->db->group_by('transaction_id');

        return $this->db->get()->result();
    }

    public function transactionsProductsGet($productId)
    {
        $this->db->select('
            products.product_id as product_id, 
            products.name as product_name, 
            products.price as price, 
            products.expiration as expiration, 
            products.unit_in_stock as unit_in_stock,
            products.status as status,
            products.description as product_description,
            products.note as note,
            products.created_at as created_at,
            products.updated_at as updated_at,
            products_categories.category_id as category_id,
            products_categories.name as category_name,
            products_categories.description as category_description');
        $this->db->from('products');
        $this->db->join('products_categories', 'products.products_categories_category_id = products_categories.category_id');
        $this->db->where_in('product_id', $productId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}

/* End of file ModelName.php */
