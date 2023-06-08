<?php
include 'functions.php';
// Connect to MySQL database
$pdo = new PDO('mysql:host=sql304.infinityfree.com;dbname=if0_34382073_danakilat', 'if0_34382073', 'CupkXoLyoHKxF');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('USE if0_34382073_danakilat');
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;


// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM kontak ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of contacts, this is so we can determine whether there should be a next and previous button
// Get the total number of contacts
$num_contacts = 0;
$query = $pdo->query('SELECT COUNT(*) FROM kontak');
if ($query) {
    $num_contacts = $query->fetchColumn();
} else {
    // Handle the error, e.g., display an error message or log the error
    echo "Error retrieving contacts: " . $stmt->errorInfo()[2];
    // You might also want to exit the script to prevent further execution
    exit();
}

?>


<?=template_header('')?>

<div class="content read">
	<h2>Tampilan Data</h2>
	<a href="create.php" class="create-contact">Tambah Data</a>
	<table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>No. Telepon</td>
                <td>Pekerjaan</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['nama']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['notelp']?></td>
                <td><?=$contact['pekerjaan']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$contact['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$contact['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_contacts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>
</body>
<?=template_footer()?>