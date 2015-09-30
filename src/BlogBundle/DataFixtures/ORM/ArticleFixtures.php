<<?php

// src/BlogBundle/DataFixtures/ORM/ArticleFixtures.php

namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BlogBundle\Entity\Article;

class ArticleFixtures extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $article1 = new Article();
        $article1->setTitle('No one knows');
        $article1->setArticle('   We get some rules to follow
                            That and this, these and those
                            No one knows
                            We get these pills to swallow
                            How they stick in your throat
                            Taste like gold
                            Oh what you do to me
                            No one knows

                            I realize you’re mine
                            Indeed a fool am I

                            I journey through the desert
                            Of the mind with no hope
                            I follow
                            I drift along the ocean
                            Dead lifeboat in the sun
                            And come undone
                            Pleasantly caving in
                            I come undone

                            Heaven smiles above me
                            What a gift here below
                            But no one knows
                            The gift that you give to me
                            No one knows');
        $article1->setImage('Chrysanthemum.jpg');
        $article1->setAuthor('Queens Of The Stone Age');
        $article1->setCategory($this->getReference('category-1'));
        $article1->addTag($this->getReference('tag-1'));
        $article1->addTag($this->getReference('tag-4'));
        $article1->setCreated(new \DateTime());
        $article1->setUpdated($article1->getCreated());
        $manager->persist($article1);

        $article2 = new Article();
        $article2->setTitle('Horse with no name');
        $article2->setArticle('   On the first part of the journey, 
                            I was looking at all the life. 
                            There were plants and birds. and rocks and things, 
                            There was sand and hills and rings. 
                            The first thing I met, was a fly with a buzz, 
                            And the sky, with no clouds. 
                            The heat was hot, and the ground was dry, 
                            But the air was full of sound. 

                            Ive been through the desert on a horse with no name, 
                            It felt good to be out of the rain.
                            In the desert you can remember your name, 
                            Cause there aint no one for to give you no pain. 

                            After two days, in the desert sun, 
                            My skin began to turn red. 
                            After three days, in the desert fun, 
                            I was looking at a river bed. 
                            And the story it told, of a river that flowed, 
                            Made me sad to think it was dead. 

                            You see Ive been through the desert on a horse with no name, 
                            It felt good to be out of the rain. 
                            In the desert you can remember your name, 
                            Cause there aint no one for to give you no pain. 

                            After nine days, I let the horse run free, 
                            Cause the desert had turned to sea. 
                            There were plants and birds, and rocks and things, 
                            There was sand and hills and rings. 
                            The ocean is a desert, with its life underground, 
                            And a perfect disguise above. 
                            Under the cities lies, a heart made of ground, 
                            But the humans will give no love. 

                            You see Ive been through the desert on a horse with no name, 
                            It felt good to be out of the rain. 
                            In the desert you can remember your name, 
                            Cause there aint no one for to give you no pain.');
        $article2->setImage('Desert.jpg');
        $article2->setAuthor('America');
        $article1->addTag($this->getReference('tag-3'));
        $article2->setCategory($this->getReference('category-2'));
        $article2->setCreated(new \DateTime());
        $article2->setUpdated($article2->getCreated());
        $manager->persist($article2);
        
        $article3 = new Article();
        $article3->setTitle('Green River');
        $article3->setArticle('   Well, take me back down where cool water flow, yeh.
                            Let me remember things I love.
                            Stopping at the log where catfish bite,
                            Walking along the river road at night,
                            Barefoot girls dancin in the moonlight.

                            I can hear the bull frog calling me.
                            Wonder if my ropes still hanging to the tree.
                            Love to kick my feet way down the shallow water,
                            Shoe fly, dragon fly, get back t your mother.
                            Pick up a flat rock, skip it across Green River.

                            Up at Codys camp I spent my days, oh,
                            With flat car riders and cross-tie walkers.
                            Old Cody, Junior took me over,
                            Said, youre gonna getReference the world is smouldrin
                            And if you get lost come on home to Green River.');
        $article3->setImage('Koala.jpg');
        $article3->setAuthor('Creedence Clearwater Revival');
        $article3->addTag($this->getReference('tag-4'));
        $article3->addTag($this->getReference('tag-2'));
        $article3->addTag($this->getReference('tag-1'));
        $article3->setCategory($this->getReference('category-3'));
        $article3->setCreated(new \DateTime());
        $article3->setUpdated($article3->getCreated());
        $manager->persist($article3);
        
        $article4 = new Article();
        $article4->setTitle('One');
        $article4->setArticle('   I cant remember anything
                            Cant tell if this is true or dream
                            Deep down inside I feel to scream
                            This terrible silence stops me

                            Now that the war is through with me
                            Im waking up, I cannot see
                            That there is not much left of me
                            Nothing is real but pain now

                            Hold my breath as I wish for death
                            Oh please, God, wake me

                            Back to the womb thats much too real
                            In pumps life that I must feel
                            But cant look forward to reveal
                            Look to the time when Ill live

                            Fed through the tube that sticks in me
                            Just like a wartime novelty
                            Tied to machines that make me be
                            Cut this life off from me

                            Hold my breath as I wish for death
                            Oh please, God, wake me

                            Now the world is gone, Im just one
                            Oh God, help me
                            Hold my breath as I wish for death
                            Oh please, God, help me

                            Darkness imprisoning me
                            All that I see
                            Absolute horror
                            I cannot live
                            I cannot die
                            Trapped in myself
                            Body my holding cell

                            Landmine has taken my sight
                            Taken my speech
                            Taken my hearing
                            Taken my arms
                            Taken my legs
                            Taken my soul
                            Left me with life in hell');
        $article4->setImage('Hydrangeas.jpg');
        $article4->setAuthor('Metallica');
        $article4->addTag($this->getReference('tag-3'));
        $article4->addTag($this->getReference('tag-2'));
        $article4->addTag($this->getReference('tag-5'));
        $article4->setCategory($this->getReference('category-4'));
        $article4->setCreated(new \DateTime());
        $article4->setUpdated($article4->getCreated());
        $manager->persist($article4);
        
        $article5 = new Article();
        $article5->setTitle('Stuck In The Middle With You');
        $article5->setArticle('   Well I dont know why I came here tonight,
                            I got the feeling that something aint right,
                            Im so scared in case I fall off my chair,
                            And Im wondering how Ill get down the stairs,
                            Clowns to the left of me,
                            Jokers to the right, here I am,
                            Stuck in the middle with you.

                            Yes Im stuck in the middle with you,
                            And Im wondering what it is I should do,
                            Its so hard to keep this smile from my face,
                            Losing control, yeah, Im all over the place,
                            Clowns to the left of me, Jokers to the right,
                            Here I am, stuck in the middle with you.



                            Well you started out with nothing,
                            And youre proud that youre a self made man,
                            And your friends, they all come crawlin,
                            Slap you on the back and say,
                            Please.... Please.....

                            Trying to make some sense of it all,
                            But I can see that it makes no sense at all,
                            Is it cool to go to sleep on the floor,
                            Cause I dont think that I can take anymore
                            Clowns to the left of me, Jokers to the right,
                            Here I am, stuck in the middle with you.

                            Well you started out with nothing,
                            And youre proud that youre a self made man,
                            And your friends, they all come crawlin,
                            Slap you on the back and say,
                            Please.... Please.....

                            Well I dont know why I came here tonight,
                            I got the feeling that something aint right,
                            Im so scared in case I fall off my chair,
                            And Im wondering how Ill get down the stairs,
                            Clowns to the left of me,
                            Jokers to the right, here I am,
                            Stuck in the middle with you,
                            Yes Im stuck in the middle with you,
                            Stuck in the middle with you.');
        $article5->setImage('Jellyfish.jpg');
        $article5->setAuthor('Stealers Wheel');
        $article5->addTag($this->getReference('tag-8'));
        $article5->addTag($this->getReference('tag-5'));
        $article5->setCategory($this->getReference('category-5'));
        $article5->setCreated(new \DateTime());
        $article5->setUpdated($article5->getCreated());
        $manager->persist($article5);
        
        $article6 = new Article();
        $article6->setTitle('Folsom Prison Blues');
        $article6->setArticle('   I hear the train a comin
                            Its rollin round the bend,
                            And I aint seen the sunshine,
                            Since, I dont know when,
                            Im stuck in Folsom Prison,
                            And time keeps draggin on,
                            But that train keeps a-rollin,
                            On down to San Antone.

                            When I was just a baby,
                            My Mama told me, "Son,
                            Always be a good boy,
                            Dont ever play with guns,"
                            But I shot a man in Reno,
                            Just to watch him die,
                            When I hear that whistle blowin,
                            I hang my head and cry.

                            I bet theres rich folks eatin,
                            In a fancy dining car,
                            Theyre probably drinkin coffee,
                            And smokin big cigars,
                            But I know I had it comin,
                            I know I cant be free,
                            But those people keep a-movin,
                            And thats what tortures me.

                            Well, if they freed me from this prison,
                            If that railroad train was mine,
                            I bet Id move out over a little,
                            Farther down the line,
                            Far from Folsom Prison,
                            Thats where I want to stay,
                            And Id let that lonesome whistle,
                            Blow my Blues away. ');
        $article6->setImage('Lighthouse.jpg');
        $article6->setAuthor('Johnny Cash');
        $article6->addTag($this->getReference('tag-7'));
        $article6->addTag($this->getReference('tag-9'));
        $article6->setCategory($this->getReference('category-1'));
        $article6->setCreated(new \DateTime());
        $article6->setUpdated($article6->getCreated());
        $manager->persist($article6);
        
        $article7 = new Article();
        $article7->setTitle('The Times They Are A-Changin');
        $article7->setArticle('   Come gather round people
                            Wherever you roam
                            And admit that the waters
                            Around you have grown
                            And accept it that soon
                            Youll be drenched to the bone.
                            If your time to you
                            Is worth savin
                            Then you better start swimmin
                            Or youll sink like a stone
                            For the times they are a-changin.

                            Come writers and critics
                            Who prophesize with your pen
                            And keep your eyes wide
                            The chance wont come again
                            And dont speak too soon
                            For the wheels still in spin
                            And theres no tellin who
                            That its namin.
                            For the loser now
                            Will be later to win
                            For the times they are a-changin.

                            Come senators, congressmen
                            Please heed the call
                            Dont stand in the doorway
                            Dont block up the hall
                            For he that gets hurt
                            Will be he who has stalled
                            Theres a battle outside
                            And it is ragin.
                            Itll soon shake your windows
                            And rattle your walls
                            For the times they are a-changin.

                            Come mothers and fathers
                            Throughout the land
                            And dont criticize
                            What you cant understand
                            Your sons and your daughters
                            Are beyond your command
                            Your old road is
                            Rapidly agin.
                            Please get out of the new one
                            If you cant lend your hand
                            For the times they are a-changin.

                            The line it is drawn
                            The curse it is cast
                            The slow one now
                            Will later be fast
                            As the present now
                            Will later be past
                            Your old road is
                            Rapidly fadin.
                            And the first one now
                            Will later be last
                            For the times they are a-changin.');
        $article7->setImage('Penguins.jpg');
        $article7->setAuthor('Bob Dylan');
        $article7->addTag($this->getReference('tag-8'));
        $article7->addTag($this->getReference('tag-6'));
        $article7->addTag($this->getReference('tag-3'));
        $article7->addTag($this->getReference('tag-7'));
        $article7->setCategory($this->getReference('category-2'));
        $article7->setCreated(new \DateTime());
        $article7->setUpdated($article7->getCreated());
        $manager->persist($article7);
        
        $article8 = new Article();
        $article8->setTitle('The Joker');
        $article8->setArticle('   Some people call me the space cowboy, yeah
                            Some call me the gangster of love
                            Some people call me Maurice
                            Cause I speak of the pompitous of love

                            People talk about me, baby
                            Say Im doin you wrong, doin you wrong
                            Well, dont you worry baby, dont worry
                            Cause Im right here, right here, right here, right here at home

                            Cause Im a picker, Im a grinner
                            Im a lover and Im a sinner
                            I play my music in the sun

                            Im a joker, Im a smoker
                            Im a midnight toker
                            I get my lovin on the run

                            Youre the cutest thing that I ever did see
                            I really love your peaches, want to shake your tree
                            Lovey-dovey, lovey-dovey, lovey-dovey all the time
                            Oee baby, Ill sure show you a good time

                            Cause Im a picker, Im a grinner
                            Im a lover and Im a sinner
                            I play my music in the sun

                            Im a joker, Im a smoker
                            Im a midnight toker
                            I sure dont want to hurt no one

                            (2x)

                            People keep talking about me, baby
                            They say Im doin you wrong
                            Well, dont you worry, dont worry
                            No, dont worry, mama, cause Im right here at home

                            Youre the cutest thing I ever did see
                            Really love your peaches, want to shake your tree
                            Lovey-dovey, lovey-dovey, lovey-dovey all the time
                            Come on baby now, Ill show you a good time.');
        $article8->setImage('Tulips.jpg');
        $article8->setAuthor('Steve Miller Band');
        $article8->addTag($this->getReference('tag-10'));
        $article8->addTag($this->getReference('tag-4'));
        $article8->addTag($this->getReference('tag-1'));
        $article8->addTag($this->getReference('tag-8'));
        $article8->setCategory($this->getReference('category-1'));
        $article8->setCreated(new \DateTime());
        $article8->setUpdated($article8->getCreated());
        $manager->persist($article8);
        
        $article9 = new Article();
        $article9->setTitle('In the summertime');
        $article9->setArticle(' Chh chh-chh, uh, Chh chh-chh, uh
                                Chh chh-chh, uh, Chh chh-chh, uh
                                Chh chh-chh, uh, Chh chh-chh, uh
                                Chh chh-chh, uh, Chh chh-chh, uh
                                Chh chh-chh, uh, Chh chh-chh, uh
                                Chh chh-chh, uh, Chh chh-chh

                                In the summertime when the weather is hot
                                You can stretch right up and touch the sky
                                When the weathers fine
                                You got women, you got women on your mind
                                Have a drink, have a drive
                                Go out and see what you can find

                                If her daddys rich take her out for a meal
                                If her daddys poor just do what you feel
                                Speed along the lane
                                Do a ton or a ton an twenty-five
                                When the sun goes down
                                You can make it, make it good in a lay-by

                                Were no threat, people
                                Were not dirty, were not mean
                                We love everybody but we do as we please
                                When the weathers fine
                                We go fishin or go swimmin in the sea
                                Were always happy
                                Lifes for livin yeah, thats our philosophy

                                Sing along with us
                                Dee dee dee-dee dee
                                Dah dah dah-dah dah
                                Yeah were hap-happy
                                Dah dah-dah
                                Dee-dah-do dee-dah-do dah-do-dah
                                Dah-do-dah-dah-dah
                                Dah-dah-dah do-dah-dah

                                Alright ah

                                When the winters here, yeah its party time
                                Bring your bottle, wear your bright clothes
                                Itll soon be summertime
                                And well sing again
                                Well go drivin or maybe well settle down
                                If shes rich, if shes nice
                                Bring your friends and well all go into town


                                In the summertime when the weather is hot
                                You can stretch right up and touch the sky
                                When the weathers fine
                                You got women, you got women on your mind
                                Have a drink, have a drive
                                Go out and see what you can find

                                If her daddys rich take her out for a meal
                                If her daddys poor just do what you feel
                                Speed along the lane
                                Do a ton or a ton an twenty-five
                                When the sun goes down
                                You can make it, make it good in a lay-by

                                Were no threat, people
                                Were not dirty, were not mean
                                We love everybody but we do as we please
                                When the weathers fine
                                We go fishin or go swimmin in the sea
                                Were always happy
                                Lifes for livin yeah, thats our philosophy

                                Sing along with us
                                Dee dee dee-dee dee
                                Dah dah dah-dah dah
                                Yeah were hap-happy
                                Dah dah-dah
                                Dee-dah-do dee-dah-do dah-do-dah
                                Dah-do-dah-dah-dah
                                Dah-dah-dah do-dah-dah');
        $article9->setImage('Tulips.jpg');
        $article9->setAuthor('Mungo Jerry');
        $article9->addTag($this->getReference('tag-10'));
        $article9->addTag($this->getReference('tag-4'));
        $article9->addTag($this->getReference('tag-1'));
        $article9->addTag($this->getReference('tag-8'));
        $article9->setCategory($this->getReference('category-1'));
        $article9->setCreated(new \DateTime());
        $article9->setUpdated($article9->getCreated());
        $manager->persist($article9);
        
        $article10 = new Article();
        $article10->setTitle('');
        $article10->setArticle('');
        $article10->setImage('');
        $article10->setAuthor('');
        $article10->addTag($this->getReference('tag-10'));
        $article10->addTag($this->getReference('tag-4'));
        $article10->addTag($this->getReference('tag-1'));
        $article10->addTag($this->getReference('tag-8'));
        $article10->setCategory($this->getReference('category-1'));
        $article10->setCreated(new \DateTime());
        $article10->setUpdated($article10->getCreated());
        $manager->persist($article10);
        
        $article11 = new Article();
        $article11->setTitle('');
        $article11->setArticle('');
        $article11->setImage('');
        $article11->setAuthor('');
        $article11->addTag($this->getReference('tag-10'));
        $article11->addTag($this->getReference('tag-4'));
        $article11->addTag($this->getReference('tag-1'));
        $article11->addTag($this->getReference('tag-8'));
        $article11->setCategory($this->getReference('category-1'));
        $article11->setCreated(new \DateTime());
        $article11->setUpdated($article11->getCreated());
        $manager->persist($article11);
        
        $article12 = new Article();
        $article12->setTitle('');
        $article12->setArticle('');
        $article12->setImage('');
        $article12->setAuthor('');
        $article12->addTag($this->getReference('tag-10'));
        $article12->addTag($this->getReference('tag-4'));
        $article12->addTag($this->getReference('tag-1'));
        $article12->addTag($this->getReference('tag-8'));
        $article12->setCategory($this->getReference('category-1'));
        $article12->setCreated(new \DateTime());
        $article12->setUpdated($article12->getCreated());
        $manager->persist($article12);
        
        $article13 = new Article();
        $article13->setTitle('');
        $article13->setArticle('');
        $article13->setImage('');
        $article13->setAuthor('');
        $article13->addTag($this->getReference('tag-10'));
        $article13->addTag($this->getReference('tag-4'));
        $article13->addTag($this->getReference('tag-1'));
        $article13->addTag($this->getReference('tag-8'));
        $article13->setCategory($this->getReference('category-1'));
        $article13->setCreated(new \DateTime());
        $article13->setUpdated($article13->getCreated());
        $manager->persist($article13);
        
        $article14 = new Article();
        $article14->setTitle('');
        $article14->setArticle('');
        $article14->setImage('');
        $article14->setAuthor('');
        $article14->addTag($this->getReference('tag-10'));
        $article14->addTag($this->getReference('tag-4'));
        $article14->addTag($this->getReference('tag-1'));
        $article14->addTag($this->getReference('tag-8'));
        $article14->setCategory($this->getReference('category-1'));
        $article14->setCreated(new \DateTime());
        $article14->setUpdated($article14->getCreated());
        $manager->persist($article14);
        
        $article15 = new Article();
        $article15->setTitle('');
        $article15->setArticle('');
        $article15->setImage('');
        $article15->setAuthor('');
        $article15->addTag($this->getReference('tag-10'));
        $article15->addTag($this->getReference('tag-4'));
        $article15->addTag($this->getReference('tag-1'));
        $article15->addTag($this->getReference('tag-8'));
        $article15->setCategory($this->getReference('category-1'));
        $article15->setCreated(new \DateTime());
        $article15->setUpdated($article15->getCreated());
        $manager->persist($article15);
        
        $article16 = new Article();
        $article16->setTitle('');
        $article16->setArticle('');
        $article16->setImage('');
        $article16->setAuthor('');
        $article16->addTag($this->getReference('tag-10'));
        $article16->addTag($this->getReference('tag-4'));
        $article16->addTag($this->getReference('tag-1'));
        $article16->addTag($this->getReference('tag-8'));
        $article16->setCategory($this->getReference('category-1'));
        $article16->setCreated(new \DateTime());
        $article16->setUpdated($article16->getCreated());
        $manager->persist($article16);
        
        $article17 = new Article();
        $article17->setTitle('');
        $article17->setArticle('');
        $article17->setImage('');
        $article17->setAuthor('');
        $article17->addTag($this->getReference('tag-10'));
        $article17->addTag($this->getReference('tag-4'));
        $article17->addTag($this->getReference('tag-1'));
        $article17->addTag($this->getReference('tag-8'));
        $article17->setCategory($this->getReference('category-1'));
        $article17->setCreated(new \DateTime());
        $article17->setUpdated($article17->getCreated());
        $manager->persist($article17);
        
        $article18 = new Article();
        $article18->setTitle('');
        $article18->setArticle('');
        $article18->setImage('');
        $article18->setAuthor('');
        $article18->addTag($this->getReference('tag-10'));
        $article18->addTag($this->getReference('tag-4'));
        $article18->addTag($this->getReference('tag-1'));
        $article18->addTag($this->getReference('tag-8'));
        $article18->setCategory($this->getReference('category-1'));
        $article18->setCreated(new \DateTime());
        $article18->setUpdated($article18->getCreated());
        $manager->persist($article18);
        
        $article19 = new Article();
        $article19->setTitle('');
        $article19->setArticle('');
        $article19->setImage('');
        $article19->setAuthor('');
        $article19->addTag($this->getReference('tag-10'));
        $article19->addTag($this->getReference('tag-4'));
        $article19->addTag($this->getReference('tag-1'));
        $article19->addTag($this->getReference('tag-8'));
        $article19->setCategory($this->getReference('category-1'));
        $article19->setCreated(new \DateTime());
        $article19->setUpdated($article19->getCreated());
        $manager->persist($article19);
        
        $article20 = new Article();
        $article20->setTitle('');
        $article20->setArticle('');
        $article20->setImage('');
        $article20->setAuthor('');
        $article20->addTag($this->getReference('tag-10'));
        $article20->addTag($this->getReference('tag-4'));
        $article20->addTag($this->getReference('tag-1'));
        $article20->addTag($this->getReference('tag-8'));
        $article20->setCategory($this->getReference('category-1'));
        $article20->setCreated(new \DateTime());
        $article20->setUpdated($article20->getCreated());
        $manager->persist($article20);
        
        $manager->flush();

        $this->addReference('article-1', $article1);
        $this->addReference('article-2', $article2);
        $this->addReference('article-3', $article3);
        $this->addReference('article-4', $article4);
        $this->addReference('article-5', $article5);
        $this->addReference('article-6', $article6);
        $this->addReference('article-7', $article7);
        $this->addReference('article-8', $article8);
        $this->addReference('article-9', $article9);
        $this->addReference('article-10', $article10);
        $this->addReference('article-11', $article11);
        $this->addReference('article-12', $article12);
        $this->addReference('article-13', $article13);
        $this->addReference('article-14', $article14);
        $this->addReference('article-15', $article15);
        $this->addReference('article-16', $article16);
        $this->addReference('article-17', $article17);
        $this->addReference('article-18', $article18);
        $this->addReference('article-19', $article19);
        $this->addReference('article-20', $article20);
    }

    public function getOrder() {
        return 3;
    }

}
