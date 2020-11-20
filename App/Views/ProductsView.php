<h1>Products table </h1>
<a href="/">Back</a><br><br>

<table style="width:100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Unit price</th>
    </tr>
    <?php foreach ($allProducts as $product): ?>
        <tr style="font-weight: normal">
            <th><?php echo $product->getId() ?></th>
            <th><?php echo $product->getName() ?></th>
            <th><?php echo $product->getAmount() ?></th>
            <th><?php echo $product->getUnitPrice() ?></th>
            <th>
                <form method="post" action="/products">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <input type="hidden" name="id" value=<?= $product->getID() ?>">
                    <button type=" submit">Delete</button>
                </form>
            </th>
            <th>
                <form method="post" action="/edit">
                    <input type="hidden" name="_method" value="EDIT"/>
                    <input type="hidden" name="id" value=<?= $product->getID() ?>">
                    <button type=" submit">Edit</button>
                </form>
            </th>
        </tr>
    <?php endforeach; ?>
</table>

<br>

Add new product:
<form method="post" action="/products">

    <div>
        <input type="text" name="pname" id="pname" required>
        <label for="pname">Name</label>
    </div>
    <div>
        <input type="number" step="1" name="amount" id="amount" required>
        <label for="amount">Amount</label>
    </div>
    <div>
        <input type="number" step=".01" name="price" id="price" required>
        <label for="price">Price</label>
    </div>

    <button type="submit">Submit</button>
</form>

<p style="color: red"><?= $error ?></p>
