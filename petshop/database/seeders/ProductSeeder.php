<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            // SP1
            [
                'product_name' => 'Áo thun cao cổ Hàn Quốc Urban Dành cho thú cưng - Cutepets',
                'product_feature_image' => '//bizweb.dktcdn.net/thumb/medium/100/307/433/products/ao-thun-cao-co-han-quoc-urban-3.jpg?v=1604137067000',
                'product_description' => '
                <div class="rte">					
                <p>Áo thun cao cổ Hàn Quốc Urban Dành cho thú cưng - Cutepets<br>
                - Nếu không ibox hoặc ghi chú thì shop sẽ chọn ngẫu nhiên. xin cảm ơn!</p>
                <p>💥 Size S: Vòng cổ 20cm, vòng ngực: 31cm, chiều dài thân: 22cm (cân nặng 1.5 - 2.5kg)<br>
                💥 Size M: Vòng cổ 25cm, vòng ngực: 36cm, chiều dài thân: 25cm (cân nặng 2.5 - 4.5kg)<br>
                💥 Size L: Vòng cổ 29cm, vòng ngực: 41cm, chiều dài thân: 28cm (cân nặng 4.5 - 7kg)<br>
                💥 Size XL: Vòng cổ 33cm, vòng ngực: 45cm, chiều dài thân: 31cm (cân nặng 7 - 9kg)</p>
                <p><img data-thumb="original" original-height="720" original-width="720" src="//bizweb.dktcdn.net/100/307/433/products/ao-thun-cao-co-han-quoc-urban-4.jpg?v=1604136899307"><img data-thumb="original" original-height="720" original-width="720" src="//bizweb.dktcdn.net/100/307/433/products/ao-thun-cao-co-han-quoc-urban-5.jpg?v=1604136899307"><img data-thumb="original" original-height="720" original-width="720" src="//bizweb.dktcdn.net/100/307/433/products/ao-thun-cao-co-han-quoc-urban6.jpg?v=1604136899307"></p>
                <p>………………CutePets………………<br>
                Phụ Kiện Thú Cưng&nbsp;<br>
                Hotline: 0949.111.520<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0986.378.310</p>
                <p>PetshopHaNoi.com<br>
                &gt;&gt; Rất hân hành được phục vụ quý khách!!<br>
                #maysLocNuoc #PetKit&nbsp;&nbsp;#CutePets #HàNội #CầuGiấy #HàĐông</p>                             
                </div>',
                'product_price' => '55.000',
                'product_price_sale' => '0',
                'product_slug' => 'ao-thun-cao-co-han-quoc-urban',
                'brand_id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SP2
            [
                'product_name' => 'Áo thun 3 lỗ hàn quốc Urban dành cho thú cưng - CutePets',
                'product_feature_image' => '//bizweb.dktcdn.net/thumb/small/100/307/433/products/ao-thun-hinh-urban-hang-xuat-han-cutepets10.jpg?v=1603359436777',
                'product_description' => '<div class="rte">		
                <h2><em><strong>Áo thun 3 lỗ hàn quốc Urban dành cho thú cưng - CutePets</strong></em></h2>
                <p>- Nếu không ibox hoặc ghi chú thì shop sẽ chọn ngẫu nhiên. xin cảm ơn!</p>
                <p>💥 Size S: Vòng cổ 20cm, vòng ngực: 31cm, chiều dài thân: 22cm (cân nặng 1.5 - 2.5kg)<br>
                💥 Size M: Vòng cổ 25cm, vòng ngực: 36cm, chiều dài thân: 25cm (cân nặng 2.5 - 4.5kg)<br>
                💥 Size L: Vòng cổ 29cm, vòng ngực: 41cm, chiều dài thân: 28cm (cân nặng 4.5 - 7kg)<br>
                💥 Size XL: Vòng cổ 33cm, vòng ngực: 45cm, chiều dài thân: 31cm (cân nặng 7 - 9kg)</p>
                <p>&nbsp;</p>
                <p>………………CutePets………………<br>
                Phụ Kiện Thú Cưng&nbsp;<br>
                Hotline: 0949.111.520<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0986.378.310</p>
                <p>PetshopHaNoi.com<br>
                &gt;&gt; Rất hân hành được phục vụ quý khách!!<br>
                #maysLocNuoc #PetKit&nbsp;&nbsp;#CutePets #HàNội #CầuGiấy #HàĐông</p>                              
                </div>',
                'product_price' => '50.000',
                'product_price_sale' => '0',
                'product_slug' => 'ao-thun-3-lo-han-quoc-urban',
                'brand_id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SP3
            [
                'product_name' => 'Áo thun 3 lỗ có mũ Hàn Quốc Urban dành cho chó mèo - CutePets',
                'product_feature_image' => '//bizweb.dktcdn.net/thumb/small/100/307/433/products/ao-thun-hinh-urban-hang-xuat-han-cutepets6.jpg?v=1603358974887',
                'product_description' => '<div class="rte">		
                <h2><em><strong>Áo thun 3 lỗ có mũ Hàn Quốc Urban dành cho chó mèo - CutePets</strong></em></h2>
                <p>- Nếu không ibox hoặc ghi chú thì shop sẽ chọn ngẫu nhiên. xin cảm ơn!</p>
                <p>💥 Size S: Vòng cổ 20cm, vòng ngực: 31cm, chiều dài thân: 22cm (cân nặng 1.5 - 2.5kg)<br>
                💥 Size M: Vòng cổ 25cm, vòng ngực: 36cm, chiều dài thân: 25cm (cân nặng 2.5 - 4.5kg)<br>
                💥 Size L: Vòng cổ 29cm, vòng ngực: 41cm, chiều dài thân: 28cm (cân nặng 4.5 - 7kg)<br>
                💥 Size XL: Vòng cổ 33cm, vòng ngực: 45cm, chiều dài thân: 31cm (cân nặng 7 - 9kg)</p>
                <p>&nbsp;</p>
                <p>………………CutePets………………<br>
                Phụ Kiện Thú Cưng&nbsp;<br>
                Hotline: 0949.111.520<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0986.378.310</p>
                <p>PetshopHaNoi.com<br>
                &gt;&gt; Rất hân hành được phục vụ quý khách!!<br>
                #maysLocNuoc #PetKit&nbsp;&nbsp;#CutePets #HàNội #CầuGiấy #HàĐông</p>                               
                </div>',
                'product_price' => '55.000',
                'product_price_sale' => '0',
                'product_slug' => 'ao-thun-3-lo-co-mu-han-quoc-urban',
                'brand_id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SP4
            [ 
                'product_name' => 'Thảm lót sàn cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets',
                'product_feature_image' => '//bizweb.dktcdn.net/thumb/medium/100/307/433/products/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm-cutepets2-2.jpg?v=1604136012000',
                'product_description' => '<div class="rte">						
                <h2><em><strong>Thức ăn cho chó lông trắng Superior Care Adult 400g Thịt Cừu - CutePets</strong></em></h2>
                <p style="text-align: justify;">- <strong>LOẠI BỎ VẾT Ố MẮT: </strong>Các nguồn cung cấp protein được lựa chọn cẩn thận giúp duy trì thành phần phù hợp của nước mắt và có thể giúp loại bỏ các vết ố bẩn màu nâu quanh mắt, miệng và bàn chân.<br>
                &nbsp; Sản phẩm thơm ngon, đầy đủ dinh dưỡng được làm từ nguyên liệu được lựa chọn kỹ càng, chất lượng tốt nhất, được chế biến theo cách thức chuyên nghiệp, dễ tiêu hóa, giúp phân nhỏ và định hình ổn định.<br>
                &nbsp; Các nguồn cung cấp axit béo Omega-3 vượt trội - từ dầu cây lưu ly và dầu cá hồi - giúp duy trì màu lông khỏe và tình trạng hoàn hảo của da.<br>
                Thịt cừu Scotland chất lượng tốt nhất – là nguồn cung cấp chính proteins động vật.<br>
                MicroZeoGen: là một khoáng chất tự nhiên, Dynamically Micronized Clinoptilolite, kích thích tích cực hệ vi sinh đường ruột và tăng cường khả năng hấp thụ chất dinh dưỡng. Do cấu trúc vi mô đặc biệt, nó có thể giúp loại bỏ độc tố khỏi cơ thể và tăng cường hệ miễn dịch.<br>
                &nbsp; Nguyên liệu chất lượng tốt nhất: Được lựa chọn kỹ càng bởi các chuyên gia dinh dưỡng và thú y trên cơ sở nhu cầu thực tế của thú cưng của bạn.<br>
                &nbsp; &nbsp;Công thức không có lúa mì. Giúp loại bỏ nguy cơ dị ứng Gluten lúa mì.<br>
                &nbsp; Chất chống oxy hóa tự nhiên: Vitamin E và chiết xuất hương thảo giúp bảo vệ các tế bào chống lại tác động tiêu cực của gốc tự do theo một cách hoàn toàn tự nhiên.<br>
                &nbsp; &nbsp;Chế độ ăn kiêng với các nguyên liệu không chứa thành phần Gluten giúp tránh các rối loạn tiêu hóa và phản ứng dị ứng.<br>
                &nbsp; &nbsp;Giảm nguy cơ dị ứng: Không lúa mì, không thịt heo, không thịt bò.</p>
                <p style="text-align: justify;">&nbsp;<strong> Thành phần chính:</strong> gạo, mỡ gia cầm, lúa mạch, thịt cừu, protein đậu nành cô lập, gan gà thủy phân, dầu cá hồi, hạt lanh, bột củ cải đường, trứng khô, Dynamic Micronized Clinoptilolite (1%), fructooligosaccharide (FOS), nam việt quất khô, dầu hạt lưu ly, chiết xuất rau diếp xoăn, trà xanh, cúc vạn thọ khô, chiết xuất từ hạt nho.<br>
                &nbsp; Thành phần bổ sung/1 kg: Thành phần dinh dưỡng: vitamin A (3a672a) - 18000 IU, vitamin D3 (3a671) - 1500 IU, vitamin E (3a700) - 530 mg, vitamin C (3a312) - 600 mg, sắt (II) sulphate monohydrate (3b103) - 80 mg, calcium iodate anhydrous (3b202) - 1,7 mg, đồng (II) sulphate pentahydrate (3b405) - 6 mg, manganous sulphate monohydrate (3b503) - 25 mg, kẽm sulphate monohydrate (3b605) - 145 mg, sodium selenite (3b801) - 0,25 mg, taurine (3a370) - 1200 mg, DL-methionine, technically pure (3c301) - 2,5 g. Thành phần công nghệ: chiết xuất hương thảo, chiết xuất Tocopherol từ dầu thực vật (1b306(i)).<br>
                &nbsp; Chỉ tiêu chất lượng: Độ ẩm 5,8%, protein thô 21%, dầu và chất béo thô 18%, tro thô 6,2%, chất xơ thô 1,5%, canxi 0,9%, phốt pho 0,8%, kali 0,6%, natri 0,4%, axit béo Omega3 0,56%, axit béo Omega6 2,11%.<br>
                <strong>&nbsp; Hướng dẫn sử dụng:</strong> xem bảng sau.<br>
                - Trọng lượng cún 1 – 2kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 23 – 45g<br>
                - Trọng lượng cún 2 – 3kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 39 – 61g<br>
                - Trọng lượng cún 3 – 4kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 53 – 76g<br>
                - Trọng lượng cún 4 – 5kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 66 – 90g<br>
                - Trọng lượng cún 5 – 6kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 78 – 103g<br>
                - Trọng lượng cún 6 – 8kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 89 – 128g<br>
                - Trọng lượng cún 8 – 10kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 110 – 151g<br>
                &nbsp; &nbsp;Ăn trực tiếp, lượng thức ăn có thể điều chỉnh theo nhu cầu thực tế của chó. Cung cấp nước sạch cho chó mọi thời điểm.<br>
                &nbsp; &nbsp;Hướng dẫn bảo quản: Bảo quản sản phẩm ở nơi khô ráo, thoáng mát, nhiệt độ không quá 25oC.<br>
                &nbsp; &nbsp;Thông tin cảnh báo: chỉ dùng cho thú cưng.</p>
                <p style="text-align: justify;">Sản xuất tại Liên minh Châu Âu (EU)</p>
                <p>………………CutePets………………<br>
                Phụ Kiện Thú Cưng&nbsp;<br>
                Hotline: 0949.111.520<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0986.378.310</p>
                <p>PetshopHaNoi.com<br>
                &gt;&gt; Rất hân hành được phục vụ quý khách!!#cutepets #petshophanoi #pet-shop-cau-giay #pet-shop-ha-dong #phu-kien-thu-cung #Poodle #Pekingese #chihuahua #fox #Pomeranian #dachshund #Pug #bulldog #Bichon #phu-quoc #Alaska #Husky #Samoyed #Pitbull #Shiba #Golden #Becgie #Corgi #Meo-muop #xiem #ALN #ALD #Persian #Scottish #Turkish #Manie #Munchkin #Ragdoll #Bengal&nbsp;&nbsp;#Sphynx&nbsp;</p>                                   
                </div>',
                'product_price' => '150.000',
                'product_price_sale' => '0',
                'product_slug' => 'white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g',
                'brand_id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SP5
            [ 
                'product_name' => 'Thảm lót sàn cao su chống lọt chân liền tấm khổ 90 x 50cm - CutePets',
                'product_feature_image' => '//bizweb.dktcdn.net/thumb/medium/100/307/433/products/tam-lot-san-cao-su-chong-lot-chan-lien-tam-kho-90-x-50cm-cutepets2-2.jpg?v=1604136012000',
                'product_description' => '<div class="rte">						
                <h2><em><strong>Thức ăn cho chó lông trắng Superior Care Adult 400g Thịt Cừu - CutePets</strong></em></h2>
                <p style="text-align: justify;">- <strong>LOẠI BỎ VẾT Ố MẮT: </strong>Các nguồn cung cấp protein được lựa chọn cẩn thận giúp duy trì thành phần phù hợp của nước mắt và có thể giúp loại bỏ các vết ố bẩn màu nâu quanh mắt, miệng và bàn chân.<br>
                &nbsp; Sản phẩm thơm ngon, đầy đủ dinh dưỡng được làm từ nguyên liệu được lựa chọn kỹ càng, chất lượng tốt nhất, được chế biến theo cách thức chuyên nghiệp, dễ tiêu hóa, giúp phân nhỏ và định hình ổn định.<br>
                &nbsp; Các nguồn cung cấp axit béo Omega-3 vượt trội - từ dầu cây lưu ly và dầu cá hồi - giúp duy trì màu lông khỏe và tình trạng hoàn hảo của da.<br>
                Thịt cừu Scotland chất lượng tốt nhất – là nguồn cung cấp chính proteins động vật.<br>
                MicroZeoGen: là một khoáng chất tự nhiên, Dynamically Micronized Clinoptilolite, kích thích tích cực hệ vi sinh đường ruột và tăng cường khả năng hấp thụ chất dinh dưỡng. Do cấu trúc vi mô đặc biệt, nó có thể giúp loại bỏ độc tố khỏi cơ thể và tăng cường hệ miễn dịch.<br>
                &nbsp; Nguyên liệu chất lượng tốt nhất: Được lựa chọn kỹ càng bởi các chuyên gia dinh dưỡng và thú y trên cơ sở nhu cầu thực tế của thú cưng của bạn.<br>
                &nbsp; &nbsp;Công thức không có lúa mì. Giúp loại bỏ nguy cơ dị ứng Gluten lúa mì.<br>
                &nbsp; Chất chống oxy hóa tự nhiên: Vitamin E và chiết xuất hương thảo giúp bảo vệ các tế bào chống lại tác động tiêu cực của gốc tự do theo một cách hoàn toàn tự nhiên.<br>
                &nbsp; &nbsp;Chế độ ăn kiêng với các nguyên liệu không chứa thành phần Gluten giúp tránh các rối loạn tiêu hóa và phản ứng dị ứng.<br>
                &nbsp; &nbsp;Giảm nguy cơ dị ứng: Không lúa mì, không thịt heo, không thịt bò.</p>
                <p style="text-align: justify;">&nbsp;<strong> Thành phần chính:</strong> gạo, mỡ gia cầm, lúa mạch, thịt cừu, protein đậu nành cô lập, gan gà thủy phân, dầu cá hồi, hạt lanh, bột củ cải đường, trứng khô, Dynamic Micronized Clinoptilolite (1%), fructooligosaccharide (FOS), nam việt quất khô, dầu hạt lưu ly, chiết xuất rau diếp xoăn, trà xanh, cúc vạn thọ khô, chiết xuất từ hạt nho.<br>
                &nbsp; Thành phần bổ sung/1 kg: Thành phần dinh dưỡng: vitamin A (3a672a) - 18000 IU, vitamin D3 (3a671) - 1500 IU, vitamin E (3a700) - 530 mg, vitamin C (3a312) - 600 mg, sắt (II) sulphate monohydrate (3b103) - 80 mg, calcium iodate anhydrous (3b202) - 1,7 mg, đồng (II) sulphate pentahydrate (3b405) - 6 mg, manganous sulphate monohydrate (3b503) - 25 mg, kẽm sulphate monohydrate (3b605) - 145 mg, sodium selenite (3b801) - 0,25 mg, taurine (3a370) - 1200 mg, DL-methionine, technically pure (3c301) - 2,5 g. Thành phần công nghệ: chiết xuất hương thảo, chiết xuất Tocopherol từ dầu thực vật (1b306(i)).<br>
                &nbsp; Chỉ tiêu chất lượng: Độ ẩm 5,8%, protein thô 21%, dầu và chất béo thô 18%, tro thô 6,2%, chất xơ thô 1,5%, canxi 0,9%, phốt pho 0,8%, kali 0,6%, natri 0,4%, axit béo Omega3 0,56%, axit béo Omega6 2,11%.<br>
                <strong>&nbsp; Hướng dẫn sử dụng:</strong> xem bảng sau.<br>
                - Trọng lượng cún 1 – 2kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 23 – 45g<br>
                - Trọng lượng cún 2 – 3kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 39 – 61g<br>
                - Trọng lượng cún 3 – 4kg&nbsp; &nbsp; khẩu phần ăn g/ngày: 53 – 76g<br>
                - Trọng lượng cún 4 – 5kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 66 – 90g<br>
                - Trọng lượng cún 5 – 6kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 78 – 103g<br>
                - Trọng lượng cún 6 – 8kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 89 – 128g<br>
                - Trọng lượng cún 8 – 10kg&nbsp;&nbsp; &nbsp;khẩu phần ăn g/ngày: 110 – 151g<br>
                &nbsp; &nbsp;Ăn trực tiếp, lượng thức ăn có thể điều chỉnh theo nhu cầu thực tế của chó. Cung cấp nước sạch cho chó mọi thời điểm.<br>
                &nbsp; &nbsp;Hướng dẫn bảo quản: Bảo quản sản phẩm ở nơi khô ráo, thoáng mát, nhiệt độ không quá 25oC.<br>
                &nbsp; &nbsp;Thông tin cảnh báo: chỉ dùng cho thú cưng.</p>
                <p style="text-align: justify;">Sản xuất tại Liên minh Châu Âu (EU)</p>
                <p>………………CutePets………………<br>
                Phụ Kiện Thú Cưng&nbsp;<br>
                Hotline: 0949.111.520<br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;0986.378.310</p>
                <p>PetshopHaNoi.com<br>
                &gt;&gt; Rất hân hành được phục vụ quý khách!!#cutepets #petshophanoi #pet-shop-cau-giay #pet-shop-ha-dong #phu-kien-thu-cung #Poodle #Pekingese #chihuahua #fox #Pomeranian #dachshund #Pug #bulldog #Bichon #phu-quoc #Alaska #Husky #Samoyed #Pitbull #Shiba #Golden #Becgie #Corgi #Meo-muop #xiem #ALN #ALD #Persian #Scottish #Turkish #Manie #Munchkin #Ragdoll #Bengal&nbsp;&nbsp;#Sphynx&nbsp;</p>                                   
                </div>',
                'product_price' => '150.000',
                'product_price_sale' => '0',
                'product_slug' => 'white-dogs-thuc-an-vi-cuu-cho-cho-long-trang-400g',
                'brand_id' => 1,
                'category_id' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}