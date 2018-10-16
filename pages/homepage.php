<?php
/**
* Bobby Palmer, CSC-465, GNN-Earth
* Class constructs template for site Home Page.
*/

class HomePage {
    public function getHomePage() {
        return <<<HTML
        
<div id="content">
    <div id="center-focus">
        <div class="article-card" id="big-daddy">
            <div class="article-image">
                <a href=""><img src="./img/test/test3.jpg" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header">"Boris-Bot" Behavior Couldn’t Possibly Be Mistaken As Human</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;42</button>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="article-card">-->
            <!--<div class="article-blurb">-->
                <!--<h2>Lorem Ipsum</h2>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus, urna in blandit condimentum, nisl dolor aliquet tellus, vitae ultricies eros velit nec lectus. Curabitur pretium pharetra massa ac pulvinar. Nullam est velit, convallis in mollis vel, facilisis nec dolor. Sed vitae tellus eget orci pulvinar lacinia ac eget felis. Nam massa lorem, lobortis ac finibus eget, efficitur nec diam. Sed iaculis nec nisi in pretium. In vitae convallis sem. Donec porta accumsan lacus eget sodales. Praesent arcu massa, blandit et vulputate vitae, bibendum vitae dolor.</p>-->
            <!--</div>-->
        <!--</div>-->
    </div>
    <div id="left-focus">
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test4.jpg" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Galactic Center At Stake</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;92</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test6.jpg" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Travel Warning: Pleiades Supernova Forecast</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;13</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test9.jpg" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Review: Battle Royale</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;57</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="right-focus">
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test5.png" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Human Technology: Is it Even?</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;18</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test7.jpg" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Controversial Ruling: Zakhan II Rules Humans Huntable Due to Obvious Lack of Consciousness</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;122</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-card">
            <div class="article-image">
                <a href=""><img src="./img/test/test8.png" alt="test"></a>
                <div class="over-image">
                    <p class="over-image-header-sub">Human Humor: Trees</p>
                    <div class="card-subheader">
                        <button class="card-link">➥&ensp;Read Story</button>
                        <button class="card-link">&#128488;&ensp;&ensp;4</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }
}

