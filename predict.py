# -*- coding: utf-8 -*-
"""
Created on Mon Nov  4 22:52:08 2019

@author: TPR
"""
from pickle import load
from numpy import array
from keras.preprocessing.text import Tokenizer
from keras.preprocessing.sequence import pad_sequences
from keras.models import load_model
 

maxlen = 100
f=open("D:/project/datasets/main/tack.txt")
for x in f:
    instance=x
    instance = tokenizer.texts_to_sequences(instance)
    flat_list = []
    for sublist in instance:
        for item in sublist:
            flat_list.append(item)
            flat_list = [flat_list]
            instance = pad_sequences(flat_list, padding='post', maxlen=maxlen)
            model.predict(instance)
