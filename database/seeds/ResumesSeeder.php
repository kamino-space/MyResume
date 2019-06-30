<?php

use Illuminate\Database\Seeder;

class ResumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'key' => 'alibaba',
            'data' => '{
                "name": "Ahaha",
                "photo": "https://static.isdut.cn/ii/images/2019/06/30/7b31087dfb40d123a38390c28a947568.jpg",
                "contact": {
                    "tel": "123123",
                    "mail": "haha@163.com",
                    "wechat": "wx888",
                    "qq": "100001"
                },
                "application": "前端工程师",
                "description": "前端菜鸡，坐等offer",
                "info": {
                    "sex": "男",
                    "birthday": "1998.11",
                    "school": "PKU",
                    "major": "计算机科学与技术",
                    "blog": "https://blog.aikamino.cn",
                    "github": "https://github.com/kamino-space",
                    "like": "code"
                },
                "education": [
                    {
                        "school": "PKU",
                        "level": "本科",
                        "major": "计算机科学与技术",
                        "course": "微机原理",
                        "start": "2010",
                        "end": "2014"
                    },
                    {
                        "school": "THU",
                        "level": "硕士",
                        "major": "工商管理",
                        "course": "经济学原理",
                        "start": "2014",
                        "end": "2017"
                    }
                ],
                "award": [
                    "大学英语四级500分",
                    "大学英语六级600分",
                    "计算机二级C语言证书",
                    "计算机三级A语言证书"
                ],
                "experience": [
                    {
                        "company": "腾讯",
                        "duty": "前端工程师",
                        "work": "腾讯官网设计开发",
                        "start": "2017",
                        "end": "2018"
                    },
                    {
                        "company": "阿里巴巴",
                        "duty": "会计师",
                        "work": "赚了一个亿",
                        "start": "2018",
                        "end": "2020"
                    },
                    {
                        "company": "西瓜视频",
                        "duty": "自媒体",
                        "work": "直接暴富，走上人生巅峰",
                        "start": "2020",
                        "end": "2021"
                    }
                ],
                "project": [
                    {
                        "name": "云养猫",
                        "description": "在线养猫，5G吸猫。",
                        "url": "https://ihaveacat.mm",
                        "picture": "https://static.isdut.cn/ii/images/2019/06/30/d4c8e6b445e505f0e13de6c08d883e3a.jpg"
                    }
                ],
                "skill": [
                    {
                        "name": "web开发",
                        "level": "熟练",
                        "list": [
                            "熟练使用PHP、Python进行后端开发",
                            "熟练使用nodejs进行前端开发",
                            "熟练使用MySQL、Redis等数据库软件"
                        ]
                    },
                    {
                        "name": "嵌入式开发",
                        "level": "熟练",
                        "list": [
                            "熟练使用C++/Java进行嵌入式软件开发",
                            "了解汇编语言，了解CPU原理"
                        ]
                    },
                    {
                        "name": "工业软件",
                        "level": "熟练",
                        "list": [
                            "熟练使用Autodesk CAD绘图",
                            "熟练使用NL Labview进行虚拟仪器设计",
                            "熟练使用Matlab、Altium Designer等"
                        ]
                    },
                    {
                        "name": "云计算/大数据/人工智能",
                        "level": "了解",
                        "list": [
                            "熟练掌握web环境搭建",
                            "熟练使用Python语言编程",
                            "熟练使用tensorflow进行机器学习",
                            "了解Android APP开发、微信小程序开发"
                        ]
                    },
                    {
                        "name": "电子技术",
                        "level": "熟练",
                        "list": [
                            "熟练掌握PCB手工焊接技术",
                            "了解弱电电器的维修"
                        ]
                    }
                ],
                "mark": [
                    "PHP",
                    "Python",
                    "C++",
                    "Java",
                    "Android APP",
                    "Autodesk CAD",
                    "tensorflow",
                    "MySQL",
                    "Redis"
                ],
                "style": "default",
                "template": "default"
            }',
        ]);
    }
}
