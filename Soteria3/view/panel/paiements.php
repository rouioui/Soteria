<?php $title = "Panel - MyDonations";
ob_start();
?>

<?php include 'partials/_panelNavbar.php' ?>

<!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Donations faites</h2>
        <div class="row">
            <div class="col-md-12">
                <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Donateur</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Campagne</th>
                            <th scope="col">Montant donner</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($donations as $donation){ ?>
                        <tr>
                            <th scope="row"><img src="../<?php echo $donation['avatar'] ?>"  width=40 height=40 alt=""></th>
                            <td><?= $donation['first_name'] ?></td>
                            <td><?= $donation['last_name'] ?></td>
                            <td><a href="../campaign&campaign_id=<?= $donation['campaign_id'] ?>"><?= $donation['title'] ?></a></td>
                            <td><?= $donation['amount'] ?> <i class="fa-solid fa-euro-sign"></i></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                    if ($totalPages > 1) {
                        // Display the previous page link
                        if ($pageNumber > 1) {
                            echo '<a class="btn btn-primary" href="paiement&page=' . ($pageNumber - 1) . '">Previous</a>';
                        }
                        
                        // Display the first page link
                        if ($pageNumber > 3) {
                            echo '<a class="btn btn-primary" href="paiement&page=1">1</a>';
                            if ($pageNumber > 5) {
                                echo '<span class="ellipsis">...</span>';
                            }
                        }
    
                        // Display the page links
                        for ($i = max(1, $pageNumber - 2); $i <= min($pageNumber + 2, $totalPages); $i++) {
                            if ($i == $pageNumber) {
                                echo '<a class="active btn btn-primary">' . $i . '</a>';
                            } else {
                                echo '<a class="btn btn-primary" href="paiement&page=' . $i . '">' . $i . '</a>';
                            }
                        }
    
                        // Display the last page link
                        if ($pageNumber < $totalPages - 2) {
                            if ($pageNumber < $totalPages - 3) {
                                echo '<span class="ellipsis">...</span>';
                            }
                            echo '<a class="btn btn-primary" href="paiement&page=' . $totalPages . '">' . $totalPages . '</a>';
                        }
    
                        // Display the next page link
                        if ($pageNumber < $totalPages) {
                            echo '<a class="btn btn-primary" href="paiement&page=' . ($pageNumber + 1) . '">Next</a>';
                        }
                    }
                    echo '</div>';
                ?>
            </div>
        </div>
      </div>
</div>


<?php $content=ob_get_clean();?>
<?php require('templatePanel.php');?>