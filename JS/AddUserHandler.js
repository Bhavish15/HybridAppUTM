var AddUserHandler={
	addUser: function(Firstame, Lastname, Username, DateOfBirth, Gender, password){

		databaseHandler.db.transaction(

			function(tx){

				tx.executeSql(

					"insert into User(Firstname, Lastname, Username, DateOfBirth, Gender, password) values(?,?,?,?,?,?)",
					[Firstame, Lastname, Username, DateOfBirth, Gender, password],
					function(tx,results){},
					function(tx,error){

						console.log("Add User error: " + error.message);

					  }


					);

			},

			function(error){},

			function(){}

			);


	}

};

