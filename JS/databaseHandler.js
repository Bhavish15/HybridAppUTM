
var databaseHandler = {

	db: null,
	createDatabase: function(){

		this.db = window.openDatabase(
			"HeartApp.db",
			"1.0",
			"Heart App",
			1000000);

		this.db.transaction(

			function(tx){

				//run sql using tx

				tx.executeSql(

					"create table if not exists User(User_id integer primary key, Firstname text, Lastname text, Username text, DateOfBirth date, Gender text, password text )",
					[],
					function(tx,results){},
					function(tx,error){

						console.log("Error creating the table: " + error.message);

					}

					);

			},

			function(error){

				console.log("Transaction error: " + error.message);
			},

			function(){

				console.log("Database creation or call completed successfully");
			}

			);

	}

};
