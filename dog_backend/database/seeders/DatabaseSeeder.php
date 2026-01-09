<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Breed;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
// 1. Create the ADMIN Account
        User::create([
            'name' => 'Admin Boss',
            'email' => 'admin@horse.com',
            'password' => Hash::make('password123'), // Log in with this!
            'is_admin' => true
        ]);

        // 2. Create a REGULAR USER Account
        User::create([
            'name' => 'Regular Joe',
            'email' => 'user@horse.com',
            'password' => Hash::make('password123'), // Log in with this!
            'is_admin' => false
        ]);
        
        // 2. The 7 Breeds from Olga Belitskaya's Kaggle Dataset
        $breeds = [
            [
                'breed_name' => 'Chihuahua',
                'description' => 'A tiny, graceful dog with a saucy expression. Known for being loyal, charming, and big-dog attitude in a small package.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,chihuahua'
            ],
            [
                'breed_name' => 'Japanese_spaniel',
                'description' => 'Also known as the Japanese Chin, a noble and charming lap dog with a distinctive pushed-in face and silky coat.',
                'image_count' => 185,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,japanese,spaniel'
            ],
            [
                'breed_name' => 'Maltese_dog',
                'description' => 'Gentle and fearless, known for their show-stopping, floor-length coat of white, silky hair.',
                'image_count' => 252,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,maltese'
            ],
            [
                'breed_name' => 'Pekinese',
                'description' => 'An ancient toy breed with a lion-like mane and a regal, dignified manner.',
                'image_count' => 149,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,pekinese'
            ],
            [
                'breed_name' => 'Shih-Tzu',
                'description' => 'A sturdy, lively toy dog known for its long, flowing double coat and friendly personality.',
                'image_count' => 214,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,shih-tzu'
            ],
            [
                'breed_name' => 'Blenheim_spaniel',
                'description' => 'A color variety of the Cavalier King Charles Spaniel (chestnut and white), known for its affectionate nature.',
                'image_count' => 188,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,cavalier,king,charles'
            ],
            [
                'breed_name' => 'papillon',
                'description' => 'The "butterfly dog," distinguished by its large, wing-shaped ears. Highly active and intelligent.',
                'image_count' => 196,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,papillon'
            ],
            [
                'breed_name' => 'toy_terrier',
                'description' => 'A small dog with a big terrier personality; bright, alert, and full of energy.',
                'image_count' => 172,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,toy,terrier'
            ],
            [
                'breed_name' => 'Rhodesian_ridgeback',
                'description' => 'Famous for the ridge of hair along its back growing in the opposite direction. A strong, dignified hunter.',
                'image_count' => 172,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,rhodesian,ridgeback'
            ],
            [
                'breed_name' => 'Afghan_hound',
                'description' => 'Recognized by its thick, fine, silky coat and tail with a ring curl. Aloof and elegant.',
                'image_count' => 239,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,afghan,hound'
            ],
            [
                'breed_name' => 'basset',
                'description' => 'A short-legged scent hound with long, drooping ears and a sad but sweet expression.',
                'image_count' => 175,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,basset,hound'
            ],
            [
                'breed_name' => 'beagle',
                'description' => 'A small scent hound, similar in appearance to the much larger foxhound. Merry, friendly, and curious.',
                'image_count' => 195,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,beagle'
            ],
            [
                'breed_name' => 'bloodhound',
                'description' => 'A large scent hound famous for its ability to discern human scent over great distances.',
                'image_count' => 187,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bloodhound'
            ],
            [
                'breed_name' => 'bluetick',
                'description' => 'A speedy and muscular coonhound named for its mottled "blue" coat pattern.',
                'image_count' => 171,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bluetick,coonhound'
            ],
            [
                'breed_name' => 'black-and-tan_coonhound',
                'description' => 'A large, powerful hound with long ears and a distinctive black and tan coat. Used for trailing.',
                'image_count' => 159,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,coonhound'
            ],
            [
                'breed_name' => 'Walker_hound',
                'description' => 'The Treeing Walker Coonhound is a descended from foxhounds, known for speed and a clear bay.',
                'image_count' => 153,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,walker,hound'
            ],
            [
                'breed_name' => 'English_foxhound',
                'description' => 'A scent hound bred to hunt foxes by scent. Stout, muscular, and possessed of great stamina.',
                'image_count' => 157,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,english,foxhound'
            ],
            [
                'breed_name' => 'redbone',
                'description' => 'An American breed of coonhound known for its solid red coat and pleading eyes.',
                'image_count' => 148,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,redbone'
            ],
            [
                'breed_name' => 'borzoi',
                'description' => 'The Russian Wolfhound. A sighthound similar in shape to a greyhound but with long, silky fur.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,borzoi'
            ],
            [
                'breed_name' => 'Irish_wolfhound',
                'description' => 'A historic sighthound from Ireland, known for being one of the tallest dog breeds.',
                'image_count' => 218,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,irish,wolfhound'
            ],
            [
                'breed_name' => 'Italian_greyhound',
                'description' => 'A toy breed that looks like a miniature Greyhound. Slender, elegant, and affectionate.',
                'image_count' => 182,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,italian,greyhound'
            ],
            [
                'breed_name' => 'whippet',
                'description' => 'A medium-sized dog of the sighthound type. Very fast, capable of speeds up to 35 mph.',
                'image_count' => 187,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,whippet'
            ],
            [
                'breed_name' => 'Ibizan_hound',
                'description' => 'A lean, agile dog from the Balearic Islands. Known for large ears and red/white coats.',
                'image_count' => 188,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,ibizan,hound'
            ],
            [
                'breed_name' => 'Norwegian_elkhound',
                'description' => 'A Northern Spitz-type breed of dog and the National Dog of Norway. Used for hunting moose/elk.',
                'image_count' => 196,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,elkhound'
            ],
            [
                'breed_name' => 'otterhound',
                'description' => 'A large, rough-coated hound with webbed feet, originally bred for hunting otters.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,otterhound'
            ],
            [
                'breed_name' => 'Saluki',
                'description' => 'One of the oldest known breeds of domesticated dog. A sighthound with silky feathering on ears.',
                'image_count' => 200,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,saluki'
            ],
            [
                'breed_name' => 'Scottish_deerhound',
                'description' => 'A large breed of hound once bred to hunt the Red Deer by coursing. Gentle and dignified.',
                'image_count' => 232,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,scottish,deerhound'
            ],
            [
                'breed_name' => 'Weimaraner',
                'description' => 'A large dog that was originally bred for hunting in the early 19th century. Known as the "Gray Ghost".',
                'image_count' => 160,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,weimaraner'
            ],
            [
                'breed_name' => 'Staffordshire_bullterrier',
                'description' => 'A medium-sized, short-coated breed. Known for its courage, intelligence and love of children.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,staffordshire,bullterrier'
            ],
            [
                'breed_name' => 'American_Staffordshire_terrier',
                'description' => 'A smart, confident, and good-natured companion. Muscular and powerful for its size.',
                'image_count' => 164,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,amstaff'
            ],
            [
                'breed_name' => 'Bedlington_terrier',
                'description' => 'Known for its curly, woolly coat and resemblance to a lamb. A fast and athletic terrier.',
                'image_count' => 182,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bedlington,terrier'
            ],
            [
                'breed_name' => 'Border_terrier',
                'description' => 'A small, rough-coated breed of dog in the terrier group. Good-natured and obedient.',
                'image_count' => 172,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,border,terrier'
            ],
            [
                'breed_name' => 'Kerry_blue_terrier',
                'description' => 'A breed of terrier from Ireland. Known for its distinctive soft, wavy, blue-gray coat.',
                'image_count' => 179,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,kerry,blue'
            ],
            [
                'breed_name' => 'Irish_terrier',
                'description' => 'Known as the "Daredevil" of the terrier world. Bold, dashing, and courageous.',
                'image_count' => 169,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,irish,terrier'
            ],
            [
                'breed_name' => 'Norfolk_terrier',
                'description' => 'One of the smallest working terriers. Distinguished by its dropped ears (unlike the Norwich).',
                'image_count' => 172,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,norfolk,terrier'
            ],
            [
                'breed_name' => 'Norwich_terrier',
                'description' => 'A courageous, affectionate, and hardy little terrier with prick ears.',
                'image_count' => 185,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,norwich,terrier'
            ],
            [
                'breed_name' => 'Yorkshire_terrier',
                'description' => 'A small dog breed of terrier type, developed in the 19th century. Glossy, fine, silky coat.',
                'image_count' => 164,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,yorkshire,terrier'
            ],
            [
                'breed_name' => 'wire-haired_fox_terrier',
                'description' => 'A sturdy, balanced terrier with a rough, broken coat. Energetic and intelligent.',
                'image_count' => 157,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,wire,fox,terrier'
            ],
            [
                'breed_name' => 'Lakeland_terrier',
                'description' => 'A dog breed named after its place of origin, the Lake District in England. Hardy and bold.',
                'image_count' => 197,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,lakeland,terrier'
            ],
            [
                'breed_name' => 'Sealyham_terrier',
                'description' => 'A rare Welsh breed of small to medium-sized terrier. Sturdy with a white coat.',
                'image_count' => 202,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,sealyham'
            ],
            [
                'breed_name' => 'Airedale',
                'description' => 'The "King of Terriers." The largest of all terrier breeds. Clever, confident, and proud.',
                'image_count' => 202,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,airedale'
            ],
            [
                'breed_name' => 'cairn',
                'description' => 'One of the oldest of the terrier breeds, originating in the Scottish Highlands. Alert and busy.',
                'image_count' => 197,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,cairn,terrier'
            ],
            [
                'breed_name' => 'Australian_terrier',
                'description' => 'A small, sturdy, medium-boned working terrier. Courageous and spirited.',
                'image_count' => 196,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,australian,terrier'
            ],
            [
                'breed_name' => 'Dandie_Dinmont',
                'description' => 'A small Scottish terrier breed. Distinctive for its "top-knot" of hair and long body.',
                'image_count' => 180,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,dandie,dinmont'
            ],
            [
                'breed_name' => 'Boston_bull',
                'description' => 'Commonly called the Boston Terrier. A "gentleman" dog with a tuxedo coat and friendly nature.',
                'image_count' => 182,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,boston,terrier'
            ],
            [
                'breed_name' => 'miniature_schnauzer',
                'description' => 'A small dog of the Schnauzer type. Known for its beard and bushy eyebrows. Very smart.',
                'image_count' => 154,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,miniature,schnauzer'
            ],
            [
                'breed_name' => 'giant_schnauzer',
                'description' => 'A large, powerful, and dominant working breed. Intelligent and loyal.',
                'image_count' => 157,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,giant,schnauzer'
            ],
            [
                'breed_name' => 'standard_schnauzer',
                'description' => 'The original Schnauzer breed. A medium-sized, robust working dog.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,standard,schnauzer'
            ],
            [
                'breed_name' => 'Scotch_terrier',
                'description' => 'The Scottish Terrier (Scottie). A compact, short-legged terrier with an independent personality.',
                'image_count' => 158,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,scottish,terrier'
            ],
            [
                'breed_name' => 'Tibetan_terrier',
                'description' => 'Not a true terrier, but a companion dog associated with Buddhist monasteries. Profuse, long coat.',
                'image_count' => 206,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,tibetan,terrier'
            ],
            [
                'breed_name' => 'silky_terrier',
                'description' => 'A small breed of dog of the terrier dog type. Fine, glossy, blue and tan coat.',
                'image_count' => 183,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,silky,terrier'
            ],
            [
                'breed_name' => 'soft-coated_wheaten_terrier',
                'description' => 'An Irish breed known for its soft, wheat-colored coat and "Wheaten greetin\'" bounce.',
                'image_count' => 156,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,wheaten,terrier'
            ],
            [
                'breed_name' => 'West_Highland_white_terrier',
                'description' => 'The "Westie." A Scottish breed with a distinctive white harsh coat. Friendly and confident.',
                'image_count' => 169,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,westie'
            ],
            [
                'breed_name' => 'Lhasa',
                'description' => 'The Lhasa Apso is a non-sporting dog from Tibet. Originally a sentinel in palaces.',
                'image_count' => 186,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,lhasa,apso'
            ],
            [
                'breed_name' => 'flat-coated_retriever',
                'description' => 'A gundog breed with a distinctive lustrous flat coat. Eternal puppy-like demeanor.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,flat,coated,retriever'
            ],
            [
                'breed_name' => 'curly-coated_retriever',
                'description' => 'Distinguished by a coat of tight, crisp curls. One of the oldest retriever breeds.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,curly,coated,retriever'
            ],
            [
                'breed_name' => 'golden_retriever',
                'description' => 'A medium-large gun dog. Famous for its golden coat, intelligence, and friendly affection.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,golden,retriever'
            ],
            [
                'breed_name' => 'Labrador_retriever',
                'description' => 'The most popular breed in many countries. Gentle, intelligent, and great energy.',
                'image_count' => 171,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,labrador'
            ],
            [
                'breed_name' => 'Chesapeake_Bay_retriever',
                'description' => 'A large American breed belonging to the retriever family. Known for a wavy, waterproof coat.',
                'image_count' => 167,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,chesapeake'
            ],
            [
                'breed_name' => 'German_short-haired_pointer',
                'description' => 'A medium to large sized breed of dog developed in Germany for hunting. Versatile and athletic.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,gsp'
            ],
            [
                'breed_name' => 'vizsla',
                'description' => 'A dog breed from Hungary. A natural hunter and companion with a golden-rust coat.',
                'image_count' => 154,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,vizsla'
            ],
            [
                'breed_name' => 'English_setter',
                'description' => 'A medium-size breed of dog. An elegant gundog known for its speckled "belton" coat.',
                'image_count' => 161,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,english,setter'
            ],
            [
                'breed_name' => 'Irish_setter',
                'description' => 'A setter breed known for its rich chestnut or red coat. High energy and playful.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,irish,setter'
            ],
            [
                'breed_name' => 'Gordon_setter',
                'description' => 'A large breed of dog, a member of the setter family. Black and tan coat, substantial build.',
                'image_count' => 153,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,gordon,setter'
            ],
            [
                'breed_name' => 'Brittany_spaniel',
                'description' => 'Compact and energetic. Typically called just "Brittany" now, it is a versatile bird dog.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,brittany'
            ],
            [
                'breed_name' => 'clumber',
                'description' => 'The Clumber Spaniel is the largest of the spaniels. Heavy-boned with a massive head.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,clumber'
            ],
            [
                'breed_name' => 'English_springer',
                'description' => 'A breed of gun dog in the Spaniel family used for flushing and retrieving game.',
                'image_count' => 159,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,english,springer'
            ],
            [
                'breed_name' => 'Welsh_springer_spaniel',
                'description' => 'A breed of spaniel characterized by a red and white coat. Merry and active.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,welsh,springer'
            ],
            [
                'breed_name' => 'cocker_spaniel',
                'description' => 'A breed of gun dog. Known for its long, silky ears and gentle, affectionate eyes.',
                'image_count' => 159,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,cocker,spaniel'
            ],
            [
                'breed_name' => 'Sussex_spaniel',
                'description' => 'A low, compact spaniel with a golden-liver coat. Calm and steady.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,sussex,spaniel'
            ],
            [
                'breed_name' => 'Irish_water_spaniel',
                'description' => 'The largest and one of the oldest of spaniels. Features a crisp, curly, liver-colored coat.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,irish,water,spaniel'
            ],
            [
                'breed_name' => 'kuvasz',
                'description' => 'A large white flock-guarding dog breed from Hungary. Protective and independent.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,kuvasz'
            ],
            [
                'breed_name' => 'schipperke',
                'description' => 'A small Belgian breed. Black, fox-like face, and no tail. "Little Captain".',
                'image_count' => 154,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,schipperke'
            ],
            [
                'breed_name' => 'groenendael',
                'description' => 'The black variety of the Belgian Shepherd dog. Agile, intelligent, and work-oriented.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,groenendael'
            ],
            [
                'breed_name' => 'malinois',
                'description' => 'The Belgian Malinois. A high-energy working dog often used in police and military work.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,malinois'
            ],
            [
                'breed_name' => 'briard',
                'description' => 'An ancient breed of large herding dog from France. Has long hair covering its eyes.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,briard'
            ],
            [
                'breed_name' => 'kelpie',
                'description' => 'An Australian sheep dog. Intense, energetic, and extremely intelligent.',
                'image_count' => 153,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,kelpie'
            ],
            [
                'breed_name' => 'komondor',
                'description' => 'A large, white livestock guardian dog known for its long, corded coat (mop-like).',
                'image_count' => 154,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,komondor'
            ],
            [
                'breed_name' => 'Old_English_sheepdog',
                'description' => 'A large breed of dog with a shaggy grey and white coat. Famous for its bobtail.',
                'image_count' => 169,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,old,english,sheepdog'
            ],
            [
                'breed_name' => 'Shetland_sheepdog',
                'description' => 'The Sheltie. A small herding dog that resembles a miniature Rough Collie. Vocal and smart.',
                'image_count' => 157,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,sheltie'
            ],
            [
                'breed_name' => 'collie',
                'description' => 'A distinctive type of herding dog. Famous for the "Lassie" rough-coated variety.',
                'image_count' => 153,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,collie'
            ],
            [
                'breed_name' => 'Border_collie',
                'description' => 'Widely considered the most intelligent dog breed. Intense herding instinct and high energy.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,border,collie'
            ],
            [
                'breed_name' => 'Bouvier_des_Flandres',
                'description' => 'A herding dog breed originating in Flanders. Powerful, rough-coated, and protective.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bouvier'
            ],
            [
                'breed_name' => 'Rottweiler',
                'description' => 'A breed of domestic dog, regarded as medium-to-large or large. Strong guarding instincts.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,rottweiler'
            ],
            [
                'breed_name' => 'German_shepherd',
                'description' => 'A breed of medium to large-sized working dog. Loyal, confident, and highly trainable.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,german,shepherd'
            ],
            [
                'breed_name' => 'Doberman',
                'description' => 'Sleek and powerful. Possessing a magnificent physique and keen intelligence.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,doberman'
            ],
            [
                'breed_name' => 'miniature_pinscher',
                'description' => 'The "King of Toys." A small breed originating from Germany. Fearless and energetic.',
                'image_count' => 184,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,min,pin'
            ],
            [
                'breed_name' => 'Greater_Swiss_Mountain_dog',
                'description' => 'A large, heavy-boned, and powerful breed. The oldest of the Swiss breeds.',
                'image_count' => 168,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,swiss,mountain'
            ],
            [
                'breed_name' => 'Bernese_mountain_dog',
                'description' => 'A large-sized breed of dog, one of the four breeds of Sennenhund. Tri-colored and gentle.',
                'image_count' => 218,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bernese'
            ],
            [
                'breed_name' => 'Appenzeller',
                'description' => 'A medium-sized breed of Sennenhund. Agile, high-energy herder with a curled tail.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,appenzeller'
            ],
            [
                'breed_name' => 'EntleBucher',
                'description' => 'The smallest of the four Sennenhunds. A cattle herding dog; sturdy and active.',
                'image_count' => 202,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,entlebucher'
            ],
            [
                'breed_name' => 'boxer',
                'description' => 'A medium to large, short-haired breed. Playful, bright, and energetic.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,boxer'
            ],
            [
                'breed_name' => 'bull_mastiff',
                'description' => 'A large-sized breed of domestic dog, with a solid build and a short muzzle.',
                'image_count' => 156,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,bullmastiff'
            ],
            [
                'breed_name' => 'Tibetan_mastiff',
                'description' => 'A large Tibetan breed. Known for its noble and impressive appearance and guarding instinct.',
                'image_count' => 152,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,tibetan,mastiff'
            ],
            [
                'breed_name' => 'French_bulldog',
                'description' => 'Small breed with large "bat ears". Friendly, mild-mannered, and great companions.',
                'image_count' => 159,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,french,bulldog'
            ],
            [
                'breed_name' => 'Great_Dane',
                'description' => 'A German breed of dog known for its giant size. The "Apollo of Dogs". Gentle giant.',
                'image_count' => 156,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,great,dane'
            ],
            [
                'breed_name' => 'Saint_Bernard',
                'description' => 'A breed of very large working dog from the Western Alps. Famous for alpine rescues.',
                'image_count' => 170,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,saint,bernard'
            ],
            [
                'breed_name' => 'Eskimo_dog',
                'description' => 'The American Eskimo Dog. A breed of companion dog, originating in Germany (Spitz type).',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,eskimo,dog'
            ],
            [
                'breed_name' => 'malamute',
                'description' => 'The Alaskan Malamute. A large breed of domestic dog originally bred for hauling heavy freight.',
                'image_count' => 178,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,malamute'
            ],
            [
                'breed_name' => 'Siberian_husky',
                'description' => 'A medium size working dog breed. Recognizable by its thick fur and blue or multi-colored eyes.',
                'image_count' => 192,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,husky'
            ],
            [
                'breed_name' => 'affenpinscher',
                'description' => 'Also known as the "Monkey Terrier". A terrier-like toy breed of dog.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,affenpinscher'
            ],
            [
                'breed_name' => 'basenji',
                'description' => 'The "barkless dog" from Africa. Known for its yodel-like sound (baroo) and curled tail.',
                'image_count' => 209,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,basenji'
            ],
            [
                'breed_name' => 'pug',
                'description' => 'A breed of dog with physically distinctive features of a wrinkly, short-muzzled face.',
                'image_count' => 200,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,pug'
            ],
            [
                'breed_name' => 'Leonberg',
                'description' => 'The Leonberger. A giant dog breed, whose name derives from the city of Leonberg in Germany.',
                'image_count' => 210,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,leonberger'
            ],
            [
                'breed_name' => 'Newfoundland',
                'description' => 'A large working dog. They can be black, brown, or white-and-black. Strong swimmers.',
                'image_count' => 195,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,newfoundland'
            ],
            [
                'breed_name' => 'Great_Pyrenees',
                'description' => 'A large, majestic breed used to guard livestock. Known for its thick white coat.',
                'image_count' => 213,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,great,pyrenees'
            ],
            [
                'breed_name' => 'Samoyed',
                'description' => 'A breed of large herding dog with thick, white, double-layer coat. The "Smiling Sammy".',
                'image_count' => 218,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,samoyed'
            ],
            [
                'breed_name' => 'Pomeranian',
                'description' => 'A breed of dog of the Spitz type. Small, fluffy, and very lively.',
                'image_count' => 219,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,pomeranian'
            ],
            [
                'breed_name' => 'chow',
                'description' => 'The Chow Chow. A dog breed originally from northern China. Blue-black tongue and lion-like mane.',
                'image_count' => 196,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,chow,chow'
            ],
            [
                'breed_name' => 'keeshond',
                'description' => 'A medium-sized dog with a plush, two-layer coat of silver and black fur. "Spectacles" markings.',
                'image_count' => 158,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,keeshond'
            ],
            [
                'breed_name' => 'Brabancon_griffon',
                'description' => 'The smooth-coated variety of the Brussels Griffon. Small and expressive.',
                'image_count' => 153,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,brussels,griffon'
            ],
            [
                'breed_name' => 'Pembroke',
                'description' => 'Pembroke Welsh Corgi. A cattle herding dog breed. Famous for being preferred by Queen Elizabeth II.',
                'image_count' => 181,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,corgi'
            ],
            [
                'breed_name' => 'Cardigan',
                'description' => 'Cardigan Welsh Corgi. Older than the Pembroke, distinguished by its tail and larger ears.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,cardigan,corgi'
            ],
            [
                'breed_name' => 'toy_poodle',
                'description' => 'The smallest variety of the Poodle breed. Highly intelligent and elegant.',
                'image_count' => 151,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,toy,poodle'
            ],
            [
                'breed_name' => 'miniature_poodle',
                'description' => 'A medium-sized Poodle. Active, athletic, and very smart.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,miniature,poodle'
            ],
            [
                'breed_name' => 'standard_poodle',
                'description' => 'The largest of the Poodle varieties. Originally a water retriever. Hypoallergenic coat.',
                'image_count' => 159,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,standard,poodle'
            ],
            [
                'breed_name' => 'Mexican_hairless',
                'description' => 'The Xoloitzcuintli. One of the oldest breeds of dog. Found in hairless and coated varieties.',
                'image_count' => 155,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,xoloitzcuintli'
            ],
            [
                'breed_name' => 'dingo',
                'description' => 'A wild dog found in Australia. Sandy-colored coat and distinct wild appearance.',
                'image_count' => 156,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,dingo'
            ],
            [
                'breed_name' => 'dhole',
                'description' => 'The Asiatic wild dog. A canid native to Central, South, and Southeast Asia.',
                'image_count' => 150,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,dhole'
            ],
            [
                'breed_name' => 'African_hunting_dog',
                'description' => 'Also known as the Painted Dog. A wild canine with a colorful, patchy coat and large ears.',
                'image_count' => 169,
                'sample_image_url' => 'https://loremflickr.com/640/480/dog,african,wild,dog'
            ]
        ];
        foreach ($breeds as $breed) {
            Breed::create($breed);
        }
    }
}