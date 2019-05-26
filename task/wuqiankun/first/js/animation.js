function getStyle(ele) {
            return ele.currentStyle || getComputedStyle(ele)
        }
        window.requestAnimationFrame = window.requestAnimationFrame || function (fn) {
            return setTimeout(fn, 1000 / 60)
        }
        window.cancelAnimationFrame = window.cancelAnimationFrame || clearTimeout

        
        function animation(ele, obj, time, cb) {
            var Tween = {
                Linear: {
                    easeIn: function (t, b, c, d) {
                        return c * t / d + b;
                    }
                },
                Quad: {
                    easeIn: function (t, b, c, d) {
                        return c * (t /= d) * t + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return -c * (t /= d) * (t - 2) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if ((t /= d / 2) < 1) return c / 2 * t * t + b;
                        return -c / 2 * ((--t) * (t - 2) - 1) + b;
                    }
                },
                Cubic: {
                    easeIn: function (t, b, c, d) {
                        return c * (t /= d) * t * t + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return c * ((t = t / d - 1) * t * t + 1) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
                        return c / 2 * ((t -= 2) * t * t + 2) + b;
                    }
                },
                Quart: {
                    easeIn: function (t, b, c, d) {
                        return c * (t /= d) * t * t * t + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return -c * ((t = t / d - 1) * t * t * t - 1) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
                        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
                    }
                },
                Quint: {
                    easeIn: function (t, b, c, d) {
                        return c * (t /= d) * t * t * t * t + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
                        return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
                    }
                },
                Sine: {
                    easeIn: function (t, b, c, d) {
                        return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return c * Math.sin(t / d * (Math.PI / 2)) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
                    }
                },
                Expo: {
                    easeIn: function (t, b, c, d) {
                        return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if (t == 0) return b;
                        if (t == d) return b + c;
                        if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
                        return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
                    }
                },
                Circ: {
                    easeIn: function (t, b, c, d) {
                        return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
                    },
                    easeOut: function (t, b, c, d) {
                        return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
                    },
                    easeInOut: function (t, b, c, d) {
                        if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
                        return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
                    }
                },
                Elastic: {
                    easeIn: function (t, b, c, d, a, p) {
                        var s;
                        if (t == 0) return b;
                        if ((t /= d) == 1) return b + c;
                        if (typeof p == "undefined") p = d * .3;
                        if (!a || a < Math.abs(c)) {
                            s = p / 4;
                            a = c;
                        } else {
                            s = p / (2 * Math.PI) * Math.asin(c / a);
                        }
                        return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                    },
                    easeOut: function (t, b, c, d, a, p) {
                        var s;
                        if (t == 0) return b;
                        if ((t /= d) == 1) return b + c;
                        if (typeof p == "undefined") p = d * .3;
                        if (!a || a < Math.abs(c)) {
                            a = c;
                            s = p / 4;
                        } else {
                            s = p / (2 * Math.PI) * Math.asin(c / a);
                        }
                        return (a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b);
                    },
                    easeInOut: function (t, b, c, d, a, p) {
                        var s;
                        if (t == 0) return b;
                        if ((t /= d / 2) == 2) return b + c;
                        if (typeof p == "undefined") p = d * (.3 * 1.5);
                        if (!a || a < Math.abs(c)) {
                            a = c;
                            s = p / 4;
                        } else {
                            s = p / (2 * Math.PI) * Math.asin(c / a);
                        }
                        if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
                        return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
                    }
                },
                Back: {
                    easeIn: function (t, b, c, d, s) {
                        if (typeof s == "undefined") s = 1.70158;
                        return c * (t /= d) * t * ((s + 1) * t - s) + b;
                    },
                    easeOut: function (t, b, c, d, s) {
                        if (typeof s == "undefined") s = 1.70158;
                        return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
                    },
                    easeInOut: function (t, b, c, d, s) {
                        if (typeof s == "undefined") s = 1.70158;
                        if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
                        return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
                    }
                },
                Bounce: {
                    easeIn: function (t, b, c, d) {
                        return c - Tween.Bounce.easeOut(d - t, 0, c, d) + b;
                    },
                    easeOut: function (t, b, c, d) {
                        if ((t /= d) < (1 / 2.75)) {
                            return c * (7.5625 * t * t) + b;
                        } else if (t < (2 / 2.75)) {
                            return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
                        } else if (t < (2.5 / 2.75)) {
                            return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
                        } else {
                            return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
                        }
                    },
                    easeInOut: function (t, b, c, d) {
                        if (t < d / 2) {
                            return Tween.Bounce.easeIn(t * 2, 0, c, d) * .5 + b;
                        } else {
                            return Tween.Bounce.easeOut(t * 2 - d, 0, c, d) * .5 + c * .5 + b;
                        }
                    }
                }
            }


            //获取运动模式及运动方式对象
            var speedOpt = obj.speedOpt

            //存储三个不同的运动方式
            var speedArr = ["easeIn", "easeOut", "easeInOut"]

            //获取待改变属性值
            var data = obj.data

            //存储初始属性值
            var startValue = {}

            //存储属性变化值   目标值 - 初始值
            var changeValue = {}

            //获取 ele所有的样式
            var startStyle = getStyle(ele)

            //初始时间
            var date = new Date()

            for (var key in data) {
                var value = parseFloat(startStyle[key])
                value = isNaN(value) ? 0 : value
                startValue[key] = value

                changeValue[key] = parseFloat(data[key]) - startValue[key]
            }

            var ease = speedOpt && speedOpt.ease  //Cubic
            var speed = speedOpt && speedOpt.speed //1

            if (typeof speedOpt === "object") {//用户写了speedOpt
                if ("ease" in speedOpt) {//speedOpt对象下存在ease
                    speed = speed || 0 //如果用户没有写运动方式 默认等于 easeIn这种运动方式
                    if (ease.toLowerCase() === "linear") {
                        speed = 0
                        ease = "Linear"
                    }
                } else { //speedOpt对象下不存在ease
                    speed = 0
                    ease = "Linear"
                }
            } else {//用户没写speedOpt
                speed = 0
                ease = "Linear"
            }
            run()
            function run() {
                //时间变化值
                var changeTime = new Date() - date

                var isSuc = time - changeTime

                for (var key in data) {
                    var changeTime = new Date() - date
                    var val = Tween[ease][speedArr[speed]](changeTime, startValue[key], changeValue[key], time)
                    if (isSuc <= 0) { //限定我的目标值 
                        val = parseFloat(data[key])
                    }
                    if (key.toLowerCase() === "opacity") {
                        ele.style[key] = val

                        ele.style.filter = "alpha(opacity =" + val * 100 + " )"
                    } else {
                        ele.style[key] = val + "px"
                    }
                }
                if (isSuc <= 0) {
                    cb && cb()
                } else {
                    requestAnimationFrame(run)
                }
            }
        }