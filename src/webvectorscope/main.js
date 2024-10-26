var dataArray0;
var dataArray1;
var analyser0;
var analyser1;
var drawVisual;
var pointSize = 2;
var ctx;
var bufferLength;

function draw() {
  drawVisual = requestAnimationFrame(draw);

  analyser0.getByteTimeDomainData(dataArray0);
  analyser1.getByteTimeDomainData(dataArray1);

  ctx.fillStyle = 'rgba(0, 0, 0, 1.00)';
  ctx.fillRect(0, 0, ctx.canvas.width, ctx.canvas.height);

  ctx.lineWidth = 2;
  ctx.strokeStyle = 'rgb(255, 0, 0)';

  ctx.beginPath();
  ctx.strokeStyle = ctx.fillStyle = 'rgba(0, 158, 255, 0.25)';
  ctx.moveTo(10, ctx.canvas.height/2);
  ctx.lineTo(ctx.canvas.width-10, ctx.canvas.height/2);

  ctx.lineTo(ctx.canvas.width-20, ctx.canvas.height/2-5)
  ctx.moveTo(ctx.canvas.width-10, ctx.canvas.height/2);
  ctx.lineTo(ctx.canvas.width-20, ctx.canvas.height/2+5)

  ctx.moveTo(ctx.canvas.width/2, ctx.canvas.height-10);
  ctx.lineTo(ctx.canvas.width/2, 10);
  
  ctx.lineTo(ctx.canvas.width/2-5, 20);
  ctx.moveTo(ctx.canvas.width/2, 10);
  ctx.lineTo(ctx.canvas.width/2+5, 20);
  ctx.stroke();
  ctx.fillText("x",ctx.canvas.width-40, ctx.canvas.height/2-10);
  ctx.fillText("y",ctx.canvas.width/2-20, 40);


  for(var i = 0; i < bufferLength; i++) {
    var vy = dataArray1[i] / 128.0;
    var y = vy * ctx.canvas.height/2;
    var vx = dataArray0[i] / 128.0;
    var x = vx * ctx.canvas.height/2;
    /*
    if(i === 0)
      ctx.moveTo(x, y);
    else
      ctx.lineTo(x, y);
    */
    
    ctx.beginPath();
    ctx.arc(x, y, pointSize, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#009eff';
    ctx.fill();
    
  }
  // ctx.stroke();



  /*
  var x = 0;

  for(var i = 0; i < bufferLength; i++) {

    var v = dataArray0[i] / 128.0;
    var y = v * ctx.canvas.height/2;

    if(i === 0) {
      ctx.moveTo(x, y);
    } else {
      ctx.lineTo(x, y);
    }

    x += sliceWidth;
  }

  ctx.lineTo(canvas.width, canvas.height/2);
  ctx.stroke();
  */
  //////

  // ctx.lineTo(canvas.width, canvas.height/2);
  // ctx.stroke();
};

function start() {
  var audioCtx = new (window.AudioContext || window.webkitAudioContext)();
  var splitter = audioCtx.createChannelSplitter(2);
  analyser0 = audioCtx.createAnalyser();
  analyser1 = audioCtx.createAnalyser();
  var merger = audioCtx.createChannelMerger(2);
  
  var audiostream = audioCtx.createMediaElementSource(document.querySelector('audio'));
  
  audiostream.connect(splitter);
  splitter.connect(analyser0, 0);
  splitter.connect(analyser1, 1);
  
  analyser0.connect(merger, 0, 0);
  analyser1.connect(merger, 0, 1);
  merger.connect(audioCtx.destination);
  
  analyser0.fftSize = 4096/4;
  analyser1.fftSize = 4096/4;//2048;
  bufferLength = analyser0.frequencyBinCount;
  dataArray0 = new Uint8Array(bufferLength);
  dataArray1 = new Uint8Array(bufferLength);
  
  // analyser0.getByteTimeDomainData(dataArray);
  
  // draw an oscilloscope of the current audio source
  var canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");
  ctx.font="22px Georgia";
  
  
  
  draw();
}