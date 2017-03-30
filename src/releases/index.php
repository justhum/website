<!DOCTYPE html>

<html>
  <head>
    <? include $_SERVER['DOCUMENT_ROOT']."/includes/header.php" ?>

    <title>Release Notes &ndash; Hum. &ndash; Songwriting for iPhone.</title>

    <link rel="stylesheet" href="//d3st4vfgl01ske.cloudfront.net/css/secondary.min.css">

    <meta property="og:type" content="company" />
    <meta property="og:title" content="Hum" />
    <meta property="og:image" content="//d3st4vfgl01ske.cloudfront.net/img/facebook.jpg" />
    <meta property="og:site_name" content="Hum" />
    <meta property="og:description" content="Hum is an iPhone app that combines note-taking and audio recording into a single app for capturing and organizing all your songwriting ideas." />
    <meta property="og:url" content="https://justhum.com/" />
  </head>

  <body>
    <? if (!$headless) {
      $is_support = TRUE;
      include $_SERVER['DOCUMENT_ROOT']."/includes/navigation.php";
    } ?>

    <div class="container post">
      <? if (!$headless) : ?>
        <div class="main">
          <h1>Releases</h1>
        </div>
      <? endif; ?>

      <div class="entry-content">
        <div class="named-release">
          <a href="https://open.spotify.com/album/1NvW80mVflSphrro6oWLuP">
              <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/johnmoreland-highontulsaheat.jpg">
          </a>
          <h3 class="release">Version 1.8
            <a href="https://open.spotify.com/album/1NvW80mVflSphrro6oWLuP">
              &ldquo;High on Tulsa Heat&rdquo;
            </a>
            <span class="date">January 30, 2017</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            You can now import audio into Hum. If you’re in an app that has audio files, you can now import them to Hum as a newly created Hum.
          </li>
          <li>
            <span class="added tag">Added</span>
            We added a few more links to the junk drawer.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Thickened up the waveform in spots where the audio’s very quiet.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Scrubbing audio should now follow your finger a bit better.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There were some crashes when sharing.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            After playing a song, sometimes we'd show a loading spinner when it wasn't necessary.
          </li>
        </ul>

        <div class="named-release">
          <a href="https://open.spotify.com/album/22G4usbImmkJvKIcSF5e1l">
              <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/diarrheaplanet-imrichbeyondyourwildestdreams.jpg">
          </a>
          <h3 class="release">Version 1.7
            <a href="https://open.spotify.com/album/22G4usbImmkJvKIcSF5e1l">
              &ldquo;I’m Rich Beyond Your Wildest Dreams&rdquo;
            </a>
            <span class="date">January 11, 2017</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We’re using the native sharing in iOS so you can now share your Hums to more apps.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Waveforms now draw a little differently visually as part of a larger forthcoming redesign. They should also be a tiny bit faster.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            It’s now a lot more clear which color is selected.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Sometimes our inline waveforms wouldn’t generate properly.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Inline playback after pausing in the control center would cause the playback scrubber to jump all over.
          </li>
          <li>
            <span class="removed tag">Removed</span>
            We’ve removed support for iOS 8.
          </li>
        </ul>

        <h3 class="release">1.6.2 <span class="date">June 29, 2016</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            Our lyrics text area was bouncing around when you edited text in the middle.
          </li>
        </ul>

        <h3 class="release">1.6.1 <span class="date">May 1, 2016</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            Hum’s icon now renders a bit better in a few spots
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We fixed a crash that could happen when syncing Hum.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The ‘no results’ view when searching was hidden behind the keyboard.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Subsequent audio recordings didn’t show the waveform correctly.
          </li>
        </ul>

        <div class="named-release">
          <a href="https://open.spotify.com/album/5klZj0GbathSjaZZBD2Qxm">
              <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/badbadhats-psychicreader.jpg">
          </a>
          <h3 class="release">Version 1.6
            <a href="https://open.spotify.com/album/5klZj0GbathSjaZZBD2Qxm">
              &ldquo;Psychic Reader&rdquo;
            </a>
            <span class="date">March 27, 2016</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We&rsquo;ve add 3D touch support so you can quickly add Hums directly from our app&rsquo;s icon.
          </li>
          <li>
            <span class="added tag">Added</span>
            The tuner is now free for all. Enjoy!
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Hums now display the year in their date because why wouldn&rsquo;t they?
          </li>
          <li>
            <span class="improved tag">Improved</span>
            You can now delete Hums from within a search.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We had a bug with our bluetooth playback, but it might be fixed now.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            A crash with our audio player.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            A crash when saving mood or dynamics.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Your lyrics no longer scroll on device rotation.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The library now immediately reflects a change in your key preference.
          </li>
          <li>
            <span class="removed tag">Removed</span>
            We&rsquo;ve removed support for iOS 7.
          </li>
        </ul>

        <h3 class="release">1.5.1 <span class="date">June 26, 2015</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            In rare circumstances newly added Hums weren&rsquo;t sorting properly
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/The_Coals/album/A_Happy_Animal/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/thecoals-ahappyanimal.jpg">
          </a>
          <h3 class="release">Version 1.5
            <a href="http://www.rdio.com/artist/The_Coals/album/A_Happy_Animal/">
              &ldquo;A Happy Animal&rdquo;
            </a>
            <span class="date">June 17, 2015</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            You can pin your Hums to the top of your library.
          </li>
          <li>
            <span class="added tag">Added</span>
            Now you can color-code your Hums. You can sort by these colors too.
          </li>
          <li>
            <span class="added tag">Added</span>
            You can now tag and sort your Hums by major / minor tonality.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Our mood and dynamics sliders were a little hard to use in the Hum view.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The inline player would disappear if you left Hum while it was playing and came back.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We had a crash when computing waveforms.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was a rare crash when songs stopped playing.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was a crash if you changed the search string while a song was playing.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            When deleting a Hum from the search view, Hum would crash.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was another rare crash when loading up the tuner. Fixed!
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/The_Police/album/Synchronicity_(Remastered)/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/thepolice-synchronicity.jpg">
          </a>
          <h3 class="release">Version 1.4
            <a href="http://www.rdio.com/artist/The_Police/album/Synchronicity_(Remastered)/">
              &ldquo;Synchronicity&rdquo;
            </a>
            <span class="date">February 15, 2015</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We&rsquo;ve <em>finally</em> added Dropbox syncing.
          </li>
          <li>
            <span class="added tag">Added</span>
            You can now see a count of your Hums at the bottom of the sync view.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Our inline player had a few bugs that would keep the playhead from showing up.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Lyrics and Notes are now a lot better on iOS 8. The cursor bounces around a lot less now.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Song titles are now bigger and a bit more readable in all languages.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Our tuner had a rare crash.
          </li>
        </ul>

        <h3 class="release">1.3.3 <span class="date">December 3, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            After purchasing the tuner, and double tapping the tuner icon, you could get in a strange state where the tuner wouldn&rsquo;t appear.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            If you were paying close attention to your recordings, sometimes it&rsquo;d show 1:60 before turning into 2:00. Lucky for you, we always pay close attention.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We broke text input in the lyrics field in a few languages. It should now be a lot better in Japanese, Chinese, Korean, Thai, Hebrew, and Arabic. Yeesh.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We cleaned up a few crashes related to drawing waveforms.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was a crash when determining if the tuner was purchased or not.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There isn&rsquo;t much to be said about a couple crashes that were happening pretty randomly except for this bit of <a href="https://twitter.com/designatednerd/status/534121493186502656">nerdery</a>.
          </li>
        </ul>

        <h3 class="release">1.3.2 <span class="date">November 11, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            Our header color was off brand by about 2%. I&rsquo;ve updated throughout the app and in our launch images. I&rsquo;ve brought shame upon my family.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We had a few localization issues with ellipses.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Cleaned up a couple more crashes.
          </li>
        </ul>

        <h3 class="release">1.3.1 <span class="date">November 8, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Portuguese tuner localization.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Added a bit more contrast to the recording countdown view.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            The transitions in the player have been improved a bit.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            After using the tuner, recording and playback would be much quieter.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Fixed an issue where exiting the tuner in-app purchase screen too quickly could cause a crash.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We were seeing some crashes when generating waveforms.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Fixed a crash that would occur after sharing a Hum via text message.
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/Bahamas/album/Bahamas_is_Afie/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/bahamas-bahamasisafie.jpg">
          </a>
          <h3 class="release">Version 1.3
            <a href="http://www.rdio.com/artist/Bahamas/album/Bahamas_is_Afie/">
              &ldquo;Bahamas is Afie&rdquo;
            </a>
            <span class="date">November 4, 2014</span>
          </h3>
        </div>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We added a tuner to the song view! Before you record, you can tune up with our chromatic tuner.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Added a launch image for the iPhone 6+ in landscape
          </li>
          <li>
            <span class="improved tag">Improved</span>
            There were a few crashes in our audio player that we&rsquo;ve improved.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was an issue with the lyrics text field.
          </li>
        </ul>

        <h3 class="release">1.2.1 <span class="date">October 23, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            A couple of minor bugs with the inline player.
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/Bad_Bad_Hats/album/It_Hurts/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/badbadhats-ithurts.jpg">
          </a>
          <h3 class="release">Version 1.2
            <a href="http://www.rdio.com/artist/Bad_Bad_Hats/album/It_Hurts/">
              &ldquo;It Hurts&rdquo;
            </a>
            <span class="date">October 10, 2014</span>
          </h3>
        </div>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We now support Dynamic Text. If you set your text larger in the iOS settings, Hum follows suit.
          </li>
          <li>
            <span class="added tag">Added</span>
            You can now use Hum in both portrait and landscape orientations.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We&rsquo;ve updated for iOS8. No more scaling!
          </li>
          <li>
            <span class="improved tag">Improved</span>
            The song view has been redesigned.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Recordings used to be limited to 10 minutes. We&rsquo;ve now raised this limit to 20 minutes.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Increased contrast throughout. For example, the filters screen has darker selected states.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Text is thicker and more readable throughout.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Some characters weren&rsquo;t appearing for our central european users.
          </li>
        </ul>

        <h3 class="release">1.1.1 <span class="date">July 2, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            We&rsquo;ve enabled bluetooth playback.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Another bug or two. One was causing a rare crash.
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/J_Roddy_Walston__The_Business/album/Essential_Tremors/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/jroddywalston-essentialtremors.jpg">
          </a>
          <h3 class="release">Version 1.1
            <a href="http://www.rdio.com/artist/J_Roddy_Walston__The_Business/album/Essential_Tremors/">
              &ldquo;Essential Tremors&rdquo;
            </a>
            <span class="date">June 26, 2014</span>
          </h3>
        </div>

        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Now that we&rsquo;ve all got bigger libraries, we&rsquo;ve added searching. Pull down on the library view to reveal the search bar.
          </li>
          <li>
            <span class="added tag">Added</span>
            You can sort by &ldquo;Last Edited&rdquo;. Any time you edit an idea it will jump to the top of the list.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Deleting audio from a Hum is better.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We&rsquo;re now using the correct symbol for musical sharps.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            The tick marks on our sliders are now a bit more responsive.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Our engineer Ellen is no longer Godzilla. BORING!
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            When working with songs around 10 minutes long, Hum would crash.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Some other crashes have been cleaned up.
          </li>
        </ul>

        <h3 class="release">1.0.8 <span class="date">May 3, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            You can now print your lyrics. The print button is underneath the sharing options.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            A few visual bugs have been cleaned up.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We&rsquo;ve hopefully killed another rare crasher.
          </li>
        </ul>

        <h3 class="release">1.0.7 <span class="date">April 26, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            More swedish changes. Again.
          </li>
        </ul>

        <h3 class="release">1.0.6 <span class="date">April 24, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Hum has now been translated to German. Ausgezeichnet!
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Our Swedish translation wasn&rsquo;t very good in the Settings section.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            We had some bugs when drawing waveforms.
          </li>

          <li>
            <span class="fixed tag">Fixed</span>
            Sorting by key is now working a lot better. We introduced a bug when we rewrote how keys were handled.
          </li>
        </ul>

        <h3 class="release">1.0.5 <span class="date">April 9, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            There were some crashes when moving Hum to the background.
          </li>
        </ul>

        <h3 class="release">1.0.4 <span class="date">April 4, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Hum&rsquo;s been translated to Portuguese.
          </li>
          <li>
            <span class="added tag">Added</span>
            We&rsquo;ve added Settings, About, Feedback, and Help to our app. We&rsquo;ve also added some anonymous usage data to Hum to help us figure out how you&rsquo;re using the app. This&rsquo;ll help us improve Hum. You can opt out if you&rsquo;d like.
          </li>
          <li>
            <span class="added tag">Added</span>
            If you want to turn off the recording count-down, you can.
          </li>
          <li>
            <span class="added tag">Added</span>
            If you prefer all sharps or all flats, you can now change a preference for that. If you prefer flats, notes will only ever be referred to as flats in the tuning and key selection screens.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We&rsquo;ve made the transition from the library to a song a bit smoother.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The keyboard could get caught in a weird state if you put Hum into the background while editing lyrics.
          </li>
        </ul>

        <h3 class="release">1.0.3 <span class="date">February 26, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Hum&rsquo;s been translated to Swedish. Fan ja!
          </li>
          <li>
            <span class="improved tag">Improved</span>
            The lyrics field is now called Title &amp; Lyrics to help people discover the first line of their lyrics is the title of the song.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            The Lyrics and Notes text views are a better. Your cursor won&rsquo;t go under the keyboard anymore.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Mood and Dynamics sliders now have ticks to help you be a bit more precise.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            You no longer have to confirm or dismiss a recording. It was slowing people down.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Hum now plays a little nicer with Control Center&rsquo;s audio controls.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Hum is ready for iOS 7.1.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            When viewing a Hum, the lyrics/notes input could crash the app if you opened and closed the keyboard in rapid succession. Not sure why you&rsquo;d be doing that, but we fixed it anyway.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            If you left Hum open for a very long time or forced quit without saving, the song you were working on could have been lost.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            If Hum was put in the background for a long time, sometimes the inline player&rsquo;s waveforms wouldn&rsquo;t show up.
          </li>
        </ul>

        <h3 class="release">1.0.2 <span class="date">February 2, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            Text throughout has a bit more contrast for better legibility in low-light situations (aka &ldquo;real life&rdquo;).
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            If you denied Hum permission to access your mic it would freeze.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Sometimes when you played a song from the library it wouldn&rsquo;t show the waveform.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            A few other little bugs too boring to mention.
          </li>
        </ul>
        <h3 class="release">1.0.1 <span class="date">January 27, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="fixed tag">Fixed</span>
            If your screen turned off during your very first recording, your song wouldn&rsquo;t end up being saved.
          </li>
        </ul>

        <div class="named-release">
          <a href="http://www.rdio.com/artist/Calexico/album/Algiers/">
            <img class="release" width="75" src="//d3st4vfgl01ske.cloudfront.net/img/releases/calexico-algiers.jpg">
          </a>
          <h3 class="release">Version 1.0
            <a href="http://www.rdio.com/artist/Calexico/album/Algiers/">
              &ldquo;Algiers&rdquo;
            </a>
            <span class="date">January 27, 2014</span>
          </h3>
        </div>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Hum was made available on the App Store.
          </li>
        </ul>

        <h3 class="release">Release Candidate 2 <span class="date">January 5, 2014</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            Throughout the app our buttons are much more responsive. <a href="/blog/fighting-ios7-control-center-uibuttons/">Fighting iOS7&rsquo;s Control Center with UIButtons at the bottom of the screen</a>.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Playhead accuracy is much better.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            There was crash if you opened the notification center right after you added a new song.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            When you put Hum in the background during a recording, it wouldn&rsquo;t actually save.
          </li>
        </ul>

        <h3 class="release">Release Candidate 1 <span class="date">December 23, 2013</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            You can now scrub. Drag the playhead to any point in the recording to advance playback.
          </li>
          <li>
            <span class="added tag">Added</span>
            Background playing, background recording, and control center playback controls.
          </li>
          <li>
            <span class="added tag">Added</span>
            There is an additional Clear Filters button in the library view.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            That pencil icon for deleting recordings was stupid.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Recording is stopped when other apps require the mic, or when Siri is activated.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Some users were losing their Hums when Hum was put into an inactive state.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Waveforms would disappear when the app came back from being inactive.
          </li>
        </ul>

        <h3 class="release">Beta 2 <span class="date">December 13, 2013</span></h3>
        <ul class="notes">
          <li>
            <span class="improved tag">Improved</span>
            Waveforms are now a ton more accurate and look better when you&rsquo;re humming ideas less than 30 seconds long.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            You can actually find the Clear Filters button.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Swipe to return to the library now only works on the Lyrics pane to avoid inadvertent returns.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Mood &amp; Dynamics sliders are less finicky and now have a proper threshold when dragging.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            Empty lines in song titles are now ignored.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We no longer add "Hum -" to email subjects.
          </li>
          <li>
            <span class="improved tag">Improved</span>
            We now show specific notes in alternate tunings.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Recording and playback now work on iPhone 5s.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            Pressing cancel on a recording just as it was about to start would cause a crash.
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The stop button was non-functional after receiving a phone call
          </li>
          <li>
            <span class="fixed tag">Fixed</span>
            The share button is now hidden when you&rsquo;re recording.
          </li>
        </ul>

        <h3 class="release">Beta 1 <span class="date">December 7, 2013</span></h3>
        <ul class="notes">
          <li>
            <span class="added tag">Added</span>
            Everything.
          </li>
        </ul>
      </div>
    </div>

    <? if (!$headless) {
        include $_SERVER['DOCUMENT_ROOT']."/includes/footer.php";
    } ?>

    <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//d3st4vfgl01ske.cloudfront.net/js/secondary.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-9522772-11', 'justhum.com');
      ga('send', 'pageview');
    </script>
  </body>
</html>
