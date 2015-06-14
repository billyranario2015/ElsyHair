<?php

	use Illuminate\Database\Seeder;
	use Illuminate\Database\Eloquent\Model;
	 
	use App\Product;

	class ProductTableSeeder extends Seeder{

		public function run()
		{
			$products = array(
				[
					"name" => 'Natural Hair Extension',
					'description'	=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
					'image' 		=> 'blank.jpg',
					'stock' 		=> '10',
					'amount' 		=> '20',
					'color' 		=> 'black',
					'dimension'		=> 'w12 h12',
					'popular' 		=> 1,
					'active'		=> 1
				],
				[
					"name" => 'Real Hair Extension',
					'description'	=> "Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
					'image' 		=> 'blank.jpg',
					'stock' 		=> '10',
					'amount' 		=> '20',
					'color' 		=> 'black',
					'dimension'		=> 'w12 h12',
					'popular' 		=> 1,
					'active'		=> 1
				],
				[
					"name" => 'Long Hair Extension',
					'description'	=> "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
					'image' 		=> 'blank.jpg',
					'stock' 		=> '10',
					'amount' 		=> '20',
					'color' 		=> 'black',
					'dimension'		=> 'w12 h12',
					'popular' 		=> 1,
					'active'		=> 1
				]
			);
			Product::insert($products);
		}
	}

?>