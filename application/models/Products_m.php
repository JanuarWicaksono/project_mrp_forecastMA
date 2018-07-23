<?php
    class Products_m extends CI_model{

        public function productsGet(){
            $query = $this->db->get('products');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return false;
            }
        }

        public function productGet($where){
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
            $this->db->where('product_id', $where);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return false;
            }
        }

        public function productCreate(){
            $this->db->insert('products', [
                'name' => $this->input->post('product-name'),
                'price' => $this->input->post('price'),
                'expiration' => $this->input->post('expiration'),
                'unit_in_stock' => $this->input->post('unit-in-stock'),
                'status' => $this->input->post('status'),
                'description' => $this->input->post('description'),
                'note' => $this->input->post('note'),
                'created_at' => date('Y-m-d H:i:s'),
                'products_categories_category_id' => $this->input->post('categories')
            ]);

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function productUpdate($where){
            $this->db->update('products', [
                'name' => $this->input->post('product-name'),
                'price' => $this->input->post('price'),
                'expiration' => $this->input->post('expiration'),
                'unit_in_stock' => $this->input->post('unit-in-stock'),
                'status' => $this->input->post('status'),
                'description' => $this->input->post('description'),
                'note' => $this->input->post('note'),
                'updated_at' => date('Y-m-d H:i:s'),
                'products_categories_category_id' => $this->input->post('categories')
            ], ['product_id' => $where]);

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function productDelete($where){
            $this->db->delete('products', ['product_id' => $where]);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
        public function categoriesGet(){
            $query =  $this->db->get('products_categories');
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return false;
            }
        }

        public function categoryGet($where){
            $query = $this->db->get_where('products_categories', ['category_id' => $where]);
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return false;
            }
        }

        public function categoryCreate(){
            $query = $this->db->insert('products_categories', [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')       
            ]);
            
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function categoryUpdate($where){
            $query = $this->db->update('products_categories', [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description')
            ], ['category_id' => $where]);

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function categoryDelete($where){
            $this->db->delete('products_categories', ['category_id' => $where]);
        
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function bomGet($productWhere){
            $this->db->select('*');
            $this->db->from('bom');
            $this->db->join('products', 'bom.products_product_id = products.product_id');
            $this->db->where('bom.products_product_id', $productWhere);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return $query;
            } else {
                return false;
            }
        }

        public function bomHasMaterialsGet($bomWhere){
            $this->db->select('*');
            $this->db->from('bom_has_materials');
            $this->db->join('materials', 'bom_has_materials.materials_material_id = materials.material_id');
            $this->db->where('bom_bom_id', $bomWhere);
            $query = $this->db->get();
            if ($this->db->affected_rows() > 0) {
                return $query;
            } else {
                return false;
            }

        }

        public function bomCreate(){
            $this->db->insert('bom', [
                'created_at' => date('Y-m-d H:i:s'),
                'products_product_id' => $this->input->post('product-id')
            ]);
            $bomLastId = $this->db->insert_id();
            
            $materials = $this->input->post('materials[]');
            $numCombs = $this->input->post('num-comb-materials[]');
            foreach ($materials as $i => $material) {
                $this->db->insert('bom_has_materials', [
                    'bom_bom_id' => $bomLastId,
                    'materials_material_id' => $material,
                    'num_comb_material' => $numCombs[$i]
                ]);
            }

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function bomUpdate($bomWhere){
            $this->db->delete('bom_has_materials', ['bom_bom_id' => $bomWhere]);

            $materials = $this->input->post('materials[]');
            $numCombMaterials = $this->input->post('num-comb-materials[]');
            foreach ($materials as $i => $material) {
                $this->db->insert('bom_has_materials', [
                    'bom_bom_id' => $bomWhere,
                    'materials_material_id' => $material, 
                    'num_comb_material' => $numCombMaterials[$i]
                ]);
            }

            $this->db->update('bom', [
                'updated_at' => date('Y-m-d H:i:s'),
            ], ['bom_id' => $bomWhere]);

            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }



    }
