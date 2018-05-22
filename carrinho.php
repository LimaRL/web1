<!DOCTYPE html>
<html lang="pt-br">
    <!-- menu -->
    <?php include "head.php"; ?>
    <!-- .menu -->
<body>
    <!-- menu -->
    <?php include "menu.php"; ?>
    <!-- .menu -->
    <!-- breacrumb -->
    <?php include "breadcrumb.php"; ?>
    <!-- .breacrumb -->
    <!-- categorias -->
    <section id="categoria">
        <h3>Carrinho</h3>
        <div class="container">
            <div class="_flex _space-between _end">
                <div class="cart_box layout_box">
                <table>
                    <tr>
                        <th>Produto</th>
                        <th>Nome</th>
                        <th>Quatidade</th>
                        <th>Preço</th>
                        <th></th>
                    </tr>
                    <?php for($i = 0 ; $i < 5; $i++):?>
                    <tr>
                        <td><img src="image/furniture/sofa-laranja.png" alt=""></td>
                        <td>Sofa laranja</td>
                        <td><input type="number" min="0" value="1"></td>
                        <td>999,99</td>
                        <td><i class="fas fa-trash-alt"></i></td>
                    </tr>
                    <?php endfor;?>
                    </table> 
                </div>
                <div class="checkout_box layout_box">
                    <p>Preço Total:
                         R$ 999,99</p>
                    <p>Calcular frete:</p>
                    <input class="frete" type="text" placeholder="00000-000">
                    <button>Calcular</button>
                </div>
            </div>
        </div>
    </section>
    <!-- .categorias -->
    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- .footer -->
    <script>
         $('.frete').mask('00000-000');
    </script>
</body>

</html>