	
    <?php check_message(); ?>
    
    <!-- Page Heading -->
	 <h1 class="h3 mb-2 text-gray-800">Backup and Restore Database</h1>
	 <p class="mb-4"></p>


	 <div class="row">
	     <div class="col-sm-6">
	         <div class="card">
	             <div class="card-body">
	                 <h1 class="card-header">Back-up Databse</h3>
	                     <p class="card-text">What is backup in database?
	                         A backup is a copy of data from your database that can be used to reconstruct that data. Backups can be divided into physical backups and logical backups.
	                         Physical backups are backups of the physical files used in storing and recovering your database, such as datafiles,
	                         control files, and archived redo logs.</p>
	                     <br>

                         <a href="controller.php?action=backup">
	                     <button name="backup" type="submit" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">
	                         <i class="fas fa-database"></i> Backup Database
	                     </button></a>
	             </div>
	         </div>
	     </div>
	     <div class="col-sm-6">
	         <div class="card">
	             <div class="card-body">
	                 <h1 class="card-header">Restore Database</h3>
	                     <p class="card-text">What is restoring a database?
	                         Data restore is the process of copying backup data from secondary storage and restoring it to its original location or a new location.
	                         A restore is performed to return data that has been lost, stolen or damaged to its original condition or to move data to a new location.</p>
	                     <br>

                         <a href="controller.php?action=restore">
	                     <button name="restore" type="submit" class="btn btn-outline-danger btn-rounded" data-mdb-ripple-color="dark">
	                         <i class="fas fa-window-restore"></i> Restore Database
	                     </button></a>
	             </div>
	         </div>
	     </div>
	 </div>
