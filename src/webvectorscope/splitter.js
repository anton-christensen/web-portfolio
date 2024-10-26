var ac = new (window.AudioContext || window.webkitAudioContext)();

var drawVisual;

var audiostream = ac.createMediaElementSource(document.querySelector('audio'));

ac.decodeAudioData(audiostream, function(data) {
	var source = ac.createBufferSource();
	source.buffer = data;
	var splitter = ac.createChannelSplitter(2);
	source.connect(splitter);
	var merger = ac.createChannelMerger(2);


	var analyser0 = ac.createAnalyser();
	var analyser1 = ac.createAnalyser();
	splitter.connect(analyser0, 0);
	splitter.connect(analyser1, 1);

	// Connect the splitter back to the second input of the merger: we
	// effectively swap the channels, here, reversing the stereo image.
	analyser0.connect(merger, 0, 0);
	analyser1.connect(merger, 1, 0);

	var dest = ac.createMediaStreamDestination();

	// Because we have used a ChannelMergerNode, we now have a stereo
	// MediaStream we can use to pipe the Web Audio graph to WebRTC,
	// MediaRecorder, etc.
	merger.connect(dest);
});