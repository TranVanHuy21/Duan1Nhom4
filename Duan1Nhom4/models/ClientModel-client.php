<?php
class ClientModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function search($query, $limit, $offset)
    {
        $statement = $this->pdo->prepare("SELECT products.*, category.Category_name, parentcate.parent_name 
        FROM products 
        LEFT JOIN category ON products.Id_cat = category.id
        LEFT JOIN parentcate ON category.Parent_id = parentcate.id
        WHERE LOWER(products.Name_product) LIKE LOWER(:query) 
        OR LOWER(category.Category_name) LIKE LOWER(:query) 
        OR LOWER(parentcate.parent_name) LIKE LOWER(:query)
        LIMIT :limit OFFSET :offset
    ");
        $statement->bindValue(':query', '%' . strtolower($query) . '%');
        $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        $statement->bindValue(':offset', $offset, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductsByCategoryId($categoryId)
    {
        $sql = "SELECT * FROM products WHERE Id_cat= ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategoryIdDetail($categoryId, $itemsPerPage, $offset)
    {
        try {
            $sql = "SELECT * FROM products WHERE Id_cat = :categoryId LIMIT :itemsPerPage OFFSET :offset";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
            $stmt->bindParam(':itemsPerPage', $itemsPerPage, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle error
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function getTotalProductsByCategoryId($categoryId)
    {
        $sql = "SELECT COUNT(*) FROM products WHERE Id_cat = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$categoryId]);
        return $stmt->fetchColumn();
    }
    public function getProductsByParentId($parentId, $limit, $offset)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE parent_cate = :parentId LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':parentId', $parentId);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalProductsByParentId($parentId)
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM products WHERE parent_cate = :parentId");
        $stmt->bindParam(':parentId', $parentId);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    public function getTotalProductsBySearch($query)
    {
        $statement = $this->pdo->prepare("SELECT COUNT(*) FROM products 
        LEFT JOIN category ON products.Id_cat = category.id
        LEFT JOIN parentcate ON category.Parent_id = parentcate.id
        WHERE LOWER(products.Name_product) LIKE LOWER(:query) 
        OR LOWER(category.Category_name) LIKE LOWER(:query) 
        OR LOWER(parentcate.parent_name) LIKE LOWER(:query)
    ");
        $statement->execute(['query' => '%' . strtolower($query) . '%']);
        return $statement->fetchColumn();
    }

    public function getEndTime()
    {
        $query = $this->pdo->prepare("SELECT end_time FROM countdown WHERE id = 1");
        $query->execute();
        return $query->fetchColumn();
    }
    public function getAllCategoryClient()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM category");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoriesByParentIdClient($parentId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM category WHERE parent_id = :parent_id");
        $stmt->bindParam(':parent_id', $parentId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllParentCategories()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM parentcate");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getParentCategoryById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM parentcate WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductWithMaxDiscount()
    {
        $sql = "SELECT *, COALESCE(discount, 0) AS discount FROM products ORDER BY discount DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTopViewedProductsByCategory($categoryId)
    {
        $sql = "SELECT * FROM products WHERE Id_cat = :categoryId LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':categoryId' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByParent_3()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 10";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 3]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByParent_4()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 4]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByParent_5()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 5]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByParent_6()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 6]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByParent_7()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 7]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // public function getProductByParent($id_parent)
    // {
    //     $stmt = $this->pdo->prepare("SELECT products.*, parentcate.id FROM products INNER JOIN parentcate  ON products.parent_cate = parentcate.id WHERE parent_cate :id ");
    //     $stmt->execute(['id' => $id_parent]);
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }


    function getProductsByParent_8()
    {
        $sql = "SELECT * FROM products WHERE parent_cate = :categoryId ORDER BY clicks DESC LIMIT 5";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['categoryId' => 8]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }





    public function getAllSlidesId_1()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 1]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesId_2()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 2]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesId_3()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 3]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesId_4()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 4]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesId_5()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 5]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSlidesId_6()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 6]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSlidesId_7()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 7]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSlidesId_8()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 8]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSlidesId_9()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 9]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllSlidesId_10()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM slides WHERE role_slide_id = :role_slide_id");
        $stmt->execute(['role_slide_id' => 10]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function incrementClick($id)
    {
        $stmt = $this->pdo->prepare("UPDATE products SET clicks = clicks + 1 WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function getTopProducts($limit = 5)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products ORDER BY clicks DESC LIMIT :limit");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function checkAccClient($username, $password)
    {
        try {
            $sql = "SELECT * FROM user WHERE username = :username";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    }
    public function getTopViewedProducts()
    {
        $sql = "SELECT p.*, COUNT(v.id) AS view_count
                FROM products p
                JOIN product_views v ON p.id = v.product_id
                GROUP BY p.id
                ORDER BY view_count DESC
                LIMIT 10";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addComment($productID, $userId, $commentContent, $phoneNumber)
    {
        $sql = "INSERT INTO comments (product_id, user_id, comment_content, phone_number) VALUES (:productID, :userId, :commentContent, :phoneNumber)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':productID', $productID, PDO::PARAM_INT);
        $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
        $stmt->bindParam(':commentContent', $commentContent, PDO::PARAM_STR);
        $stmt->bindParam(':phoneNumber', $phoneNumber, PDO::PARAM_STR);

        return $stmt->execute();
        // $sql = "INSERT INTO comments (id, User_id, Comment_content, Phone_number) VALUES ('$productID', '$userId', '$commentContent', '$phoneNumber')";
        // $stmt = $this->pdo->query($sql);
        // return true;
    }

    public function getCommentsByProductId($productId)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM comments WHERE id = ?");
        $stmt->execute([$productId]);
        return $stmt->fetchAll();
    }
    public function register_client($username, $password, $name)
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("INSERT INTO user (username, password, name) VALUES (:username, :password, :name)");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function resetPassword($username, $newPassword)
    {
        $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $stmt = $this->pdo->prepare("UPDATE user SET password = :password WHERE username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>